<template>
    <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">

        <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
            <template v-for="item in items" :key="item">
                <cart-item :product="item" />
            </template>
            <!--            suggest   -->
        </div>

        <cart-details :total-price="totalPrice" />

    </div>
</template>


<script setup lang="ts">

import cartItem from "./cartItem.vue";
import CartDetails from "./cartDetails.vue";
import { useCartStore } from "../../stores/cart.js";

const { items, totalPrice } = useCartStore()


</script>

<style scoped></style>
