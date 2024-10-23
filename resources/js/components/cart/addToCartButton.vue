<template>
    <form action="">
        <button type="button" @click.prevent="addToCart"
            class="inline-flex w-full items-center justify-center rounded-lg bg-primary px-5 py-2.5 text-sm font-medium  text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
            <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
            </svg>
            Add to cart
        </button>
    </form>
</template>

<script setup lang="ts">

import emit from "tiny-emitter/instance.js"
import { createToaster } from "@meforma/vue-toaster";
import { useCartStore } from "../../stores/cart";
import { ProductProps } from "@/models/ProductProps";

const toaster = createToaster();
const { addItem } = useCartStore()

const {product} = defineProps<ProductProps>()

const addToCart = () => {

    addItem({
        id: product.id,
        name: product.name,
        price: product.price,
        image: product.image,
        quantity: 1
    })

    emit.emit("cartUpdated")
    toaster.success("product added succefuly")

}

</script>

<style scoped></style>
