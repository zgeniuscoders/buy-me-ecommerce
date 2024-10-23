import { ProductType } from '@/models/ProductType';
import { CartItemsStorageService } from '@/services/CartItemsStorageService';
import { acceptHMRUpdate, defineStore } from 'pinia';
import { ref} from 'vue';

const {saveToLocalStorage,getCartItemsFromStorage} = CartItemsStorageService()

export const useCartStore = defineStore('cart', () => {

    const  items = ref<Array<ProductType>>(getCartItemsFromStorage() || [])

    function addItem(item: ProductType) {
        const existingItem = items.value.find(i => i.id === item.id);
        if (existingItem) {
            existingItem.quantity++;
        } else {
            items.value.push({ ...item, quantity: 1 });
        }
        saveToLocalStorage(items.value);
        refreshCart()
    }

    function removeItem(itemId: Number) {
        items.value = items.value.filter(item => item.id !== itemId);
        saveToLocalStorage(items.value);
        refreshCart()
    }

    function clearCart() {
        items.value = [];
        saveToLocalStorage(items.value);
        refreshCart()
    }

    function updateQuantity(itemId: Number, quantity: Number) {
        const item = items.value.find(i => i.id === itemId);
        if (item) {
            item.quantity = quantity;
            saveToLocalStorage(items.value);
            refreshCart()
        }
    }

    function refreshCart(){
        items.value = getCartItemsFromStorage()
    }

    function getCartItems(): Array<ProductType>{
        return items.value
    }

    function getTotalItems(): number{
        return items.value.reduce((total, item) => total + item.quantity, 0)
    }

    function getTotalPrice(): number{
        return items.value.reduce((total, item) => total + (item.price * item.quantity), 0)
    }

    return {
        items,
        addItem,
        updateQuantity,
        clearCart,
        removeItem,
        getCartItems,
        getTotalItems,
        getTotalPrice
    }
})

if (import.meta.hot) {
    import.meta.hot.accept(acceptHMRUpdate(useCartStore, import.meta.hot))
}