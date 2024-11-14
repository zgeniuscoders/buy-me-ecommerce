<script setup lang="ts">
import emit from "tiny-emitter/instance.js"

import Quantity from "./quantity.vue";
import {useCartStore} from "@/stores/cart";
import {ProductProps} from "@/models/ProductProps";

const {updateQuantity, removeItem} = useCartStore()
const {product} = defineProps<ProductProps>()

const decrementItemQty = () => {
    let qty = product.quantity

    if (qty > 1) {
        qty = product.quantity - 1
        updateQuantity(product.id, qty)
        emit.emit("cartUpdated")
    }


}

const incrementItemQty = async () => {
    let qty = product.quantity + 1
    updateQuantity(product.id, qty)
    emit.emit("cartUpdated")
}


const removeFromCart = () => {
    removeItem(product.id)
    emit.emit("cartUpdated")
}

</script>

<template>
    <div
        class="grid grid-cols-[100px_1fr_100px] items-center gap-4 px-4 py-3 border-t dark:border-gray-700">
        <input type="hidden" :value="product.id" name="productId[]">

        <img
            :src="product.image"
            alt="Product Image"
            width={100}
            height={100}
            class="rounded-md object-cover"
        />
        <div class="grid gap-1">
            <h3 class="font-medium">{{ product.name }}</h3>
            <p class="text-gray-500 dark:text-gray-400 text-sm">
                <button type="button" @click.prevent="removeFromCart"
                        class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                    <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                    </svg>
                    Supprimer
                </button>
            </p>
        </div>
        <div class="flex items-center justify-end gap-2">
            <span class="font-medium">{{ product.price }}$</span>
            <div class="flex items-center">

                <!-- <decrement-button :productId="props.product.id" :qty="props.product.quantity" /> -->
                <button @click="decrementItemQty" type="button" id="decrement-button"
                        data-input-counter-decrement="counter-input"
                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                    <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M1 1h16"/>
                    </svg>
                </button>

                <quantity :qty="product.quantity" :productId="product.id"/>

                <!-- <increment-button :productId="props.product.id" :qty="props.product.quantity" /> -->
                <button @click="incrementItemQty" type="button" id="increment-button"
                        data-input-counter-increment="counter-input"
                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                    <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                </button>

            </div>

        </div>
    </div>

</template>

<style scoped></style>
