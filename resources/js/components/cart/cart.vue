<template>

    <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">

        <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
            <template v-for="item in cartItems" :key="item">
                <cart-item :product="item" />
            </template>
            <!--            suggest   -->
        </div>

        <cart-details :total-price="cartItemsTotalPrice" />

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

const { getCartItems, getTotalPrice } = useCartStore()

onMounted(() => {
    cartItems.value = getCartItems()
    cartItemsTotalPrice.value = getTotalPrice()

})

emit.on("cartUpdated", () => {
    cartItems.value = getCartItems()
    cartItemsTotalPrice.value = getTotalPrice()
})

</script>

<style scoped></style>
