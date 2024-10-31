<script setup lang="ts">
import emit from "tiny-emitter/instance.js"

import Quantity from "./quantity.vue";
import { ref } from "vue";
import { useCartStore } from "@/stores/cart";
import { ProductProps } from "@/models/ProductProps";

const { updateQuantity, removeItem } = useCartStore()
const { product } = defineProps<ProductProps>()
const storagePath = ref('storage')

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
    <div class="space-y-6">
        <input type="hidden" :value="product.id" name="productId[]">

        <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6">
            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                <a href="#" class="shrink-0 md:order-1">
                    <img class="h-20 w-20 dark:hidden object-contain" :src="product.image"
                        alt="{{props.product.name}} image" />
                    <img class="hidden h-20 w-20 dark:block object-contain" :src="product.image"
                        alt="{{props.product.name}}" />
                </a>

                <label for="counter-input" class="sr-only">Choose quantity:</label>
                <div class="flex items-center justify-between md:order-3 md:justify-end">
                    <div class="flex items-center">

                        <!-- <decrement-button :productId="props.product.id" :qty="props.product.quantity" /> -->
                        <button @click="decrementItemQty" type="button" id="decrement-button"
                            data-input-counter-decrement="counter-input"
                            class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>

                        <quantity :qty="product.quantity" :productId="product.id" />

                        <!-- <increment-button :productId="props.product.id" :qty="props.product.quantity" /> -->
                        <button @click="incrementItemQty" type="button" id="increment-button"
                            data-input-counter-increment="counter-input"
                            class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>

                    </div>

                    <div class="text-end md:order-4 md:w-32">
                        <p class="text-base font-bold text-gray-900">${{ product.price }}</p>
                    </div>

                </div>

                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                    <a href="#" class="text-base font-medium text-gray-900 hover:underline">{{ product.name }}</a>

                    <div class="flex items-center gap-4">
                        <button type="button" @click.prevent="removeFromCart"
                            class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                            <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<style scoped></style>
