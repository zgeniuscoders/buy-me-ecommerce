<template>

    <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">

        <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
            <template v-for="item in cartItems" :key="item" v-if="totalItems >= 1">
                <cart-item :product="item" />
            </template>
            <template v-else>
                <div class="text-center">
                    <h3 class="text-5xl text-gray-300 mb-4">Cart is totaly empty please buy some products</h3>

                    <button
                        class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-secondary-dark focus:outline-none focus:ring-4 focus:ring-primary">
                        <a href="/products">Acheter maitenant</a>
                    </button>
                </div>
            </template>
        </div>

        <cart-details :total-price="cartItemsTotalPrice" v-if="totalItems >= 1" />

    </div>

</template>


<script setup lang="ts">
import emit from "tiny-emitter/instance.js"

import cartItem from "./cartItem.vue";
import CartDetails from "./cartDetails.vue";
import { useCartStore } from "../../stores/cart.js";
import { onMounted, ref } from "vue";
import { ProductType } from "@/models/ProductType.js";

const cartItems = ref<Array<ProductType>>()
const cartItemsTotalPrice = ref(0)
const totalItems = ref(0)

const { getCartItems, getTotalPrice, getTotalItems } = useCartStore()

onMounted(() => {
    cartItems.value = getCartItems()
    cartItemsTotalPrice.value = getTotalPrice()
    totalItems.value = getTotalItems()
})

emit.on("cartUpdated", () => {
    cartItems.value = getCartItems()
    cartItemsTotalPrice.value = getTotalPrice()
    totalItems.value = getTotalItems()
})

</script>

<style scoped></style>
