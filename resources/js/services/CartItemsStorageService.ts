import { ProductType } from "@/models/ProductType";

export const CartItemsStorageService = () => {

    function saveToLocalStorage(items: Array<ProductType>): void {
        localStorage.setItem('cartItems', JSON.stringify(items));
    }

    function getCartItemsFromStorage(): Array<ProductType> {
        return JSON.parse(localStorage.getItem('cartItems')) || []
    }

    return {
        saveToLocalStorage,
        getCartItemsFromStorage
    }

}