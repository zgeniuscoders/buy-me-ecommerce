<template>

    <Button type="submit"
            size="lg" class="w-full">Commander</Button>

</template>

<script setup lang="ts">

import useOrder from "@/services"
import { useCartStore } from "@/stores/cart";
import { createToaster } from "@meforma/vue-toaster";
import { Button } from "@/components/ui/button"

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
