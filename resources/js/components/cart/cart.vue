<template>
    <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">

        <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
            <template v-for="item in cart" :key="item">
                <cart-item :product="item"/>
            </template>
            <!--            suggest   -->
        </div>

        <cart-details :total-price="totalPrice"/>

    </div>
</template>


<script setup>

import CartItem from "./cartItem.vue";
import CartDetails from "./cartDetails.vue";
import {onMounted} from "vue";
import useCart from "../../services/index.js";
import emitter from "tiny-emitter/instance.js"

const {getCart, cart,totalPrice} = useCart()

onMounted(() => {
    getCart()

    emitter.on('productChanged', () => {
        getCart()
    })
})
</script>

<style scoped>

</style>
