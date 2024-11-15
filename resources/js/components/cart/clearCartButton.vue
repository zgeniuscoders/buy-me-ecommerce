<template>

    <button type="button" @click.prevent="handlerClearCart"
            class="items-center justify-center rounded-lg bg-primary px-5 py-2.5 text-sm font-medium  text-white hover:bg-primary-600 focus:outline-none focus:ring-4 focus:ring-primary-300">
        Vider le panier
    </button>

</template>


<script setup lang="ts">
import {useCartStore} from '@/stores/cart';
import emit from "tiny-emitter/instance.js"

const {clearCart} = useCartStore()

const handlerClearCart = () => {
    clearCart()
    emit.emit("cartUpdated")
}
</script>
