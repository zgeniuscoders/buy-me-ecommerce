<template>

    <button type="submit"
        class="flex w-full items-center justify-center rounded-lg bg-orange-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300">Proceed
        to Checkout</button>

</template>

<script setup lang="ts">

import useOrder from "@/services"
import { useCartStore } from "@/stores/cart";
import { createToaster } from "@meforma/vue-toaster";


const toaster = createToaster();

const { proceedToCheckout } = useOrder()
const { items, clearCart } = useCartStore()

const checkout = async () => {
    proceedToCheckout(items).then(res => {
        toaster.success('Commande passer avec success')

        clearCart()
    }).catch(e => {
        toaster.error('an excepted error occured')

        console.error(e);
    })
}

</script>