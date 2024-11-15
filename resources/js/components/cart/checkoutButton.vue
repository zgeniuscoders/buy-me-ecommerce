<template>

    <Button type="button"
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
    // proceedToCheckout(items).then(res => {
    //     toaster.success('Commande passée avec succès.')
    //
    //     clearCart()
    // }).catch(e => {
    //     toaster.error('Une erreur s\'est produite lors du traitement de votre commande. Veuillez réessayer plus tard.')
    //
    //     console.error(e);
    // })
}

</script>
