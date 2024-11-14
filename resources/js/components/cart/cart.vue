<template>

    <div class="grid md:grid-cols-[1fr_300px] gap-8 max-w-6xl mx-auto px-4 md:px-6 py-12">
        <div class="grid gap-6">
            <div class="grid gap-4">
                <h1 class="text-2xl font-bold">Panier d'achat</h1>
                <p class="text-gray-500 dark:text-gray-400">Vérifiez les articles dans votre panier et procédez au paiement.</p>
            </div>

            <div class="grid gap-4">
                <div class="grid gap-4 border rounded-lg overflow-hidden">
                    <div
                        class="grid grid-cols-[100px_1fr_100px] items-center gap-4 bg-gray-100 dark:bg-gray-800 px-4 py-3">
                        <span class="font-medium">Articles</span>
                        <span class="font-medium">Prix</span>
                        <span class="font-medium text-right">Quantite</span>
                    </div>
                    <template v-for="item in cartItems" :key="item" v-if="totalItems >= 1">
                        <cart-item :product="item"/>
                    </template>
                </div>
            </div>
        </div>
        <cart-details :total-price="cartItemsTotalPrice" v-if="totalItems >= 1"/>
    </div>

</template>


<script setup lang="ts">
import emit from "tiny-emitter/instance.js"

import cartItem from "./cartItem.vue";
import CartDetails from "./cartDetails.vue";
import {useCartStore} from "../../stores/cart.js";
import {onMounted, ref} from "vue";
import {ProductType} from "@/models/ProductType.js";

const cartItems = ref<Array<ProductType>>()
const cartItemsTotalPrice = ref(0)
const totalItems = ref(0)

const {getCartItems, getTotalPrice, getTotalItems} = useCartStore()

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
