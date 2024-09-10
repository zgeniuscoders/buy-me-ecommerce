import { acceptHMRUpdate, defineStore } from 'pinia';

export const useCartStore = defineStore('cart', {
    state: () => ({
        items: JSON.parse(localStorage.getItem('cartItems')) || []
    }),
    getters: {
        totalItems: (state) => state.items.reduce((total, item) => total + item.quantity, 0),
        totalPrice: (state) => state.items.reduce((total, item) => total + (item.price * item.quantity), 0)
    },
    actions: {
        addItem(item) {
            const existingItem = this.items.find(i => i.id === item.id);
            if (existingItem) {
                existingItem.quantity++;
            } else {
                this.items.push({ ...item, quantity: 1 });
            }
            this.saveToLocalStorage();
        },
        removeItem(itemId) {
            this.items = this.items.filter(item => item.id !== itemId);
            this.saveToLocalStorage();
        },
        clearCart() {
            this.items = [];
            this.saveToLocalStorage();
        },
        updateQuantity(itemId, quantity) {
            const item = this.items.find(i => i.id === itemId);
            if (item) {
                item.quantity = quantity;
                this.saveToLocalStorage();
            }
        },
        getTotalItems(){
            return this.totalItems
        },
        getCartItems(){
            return this.items
        },
        saveToLocalStorage() {
            localStorage.setItem('cartItems', JSON.stringify(this.items));
        }
    }
});



if (import.meta.hot) {
    import.meta.hot.accept(acceptHMRUpdate(useCartStore, import.meta.hot))
}