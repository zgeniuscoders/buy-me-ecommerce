<script setup lang="ts">
import emit from "tiny-emitter/instance.js"

import CartItem from "@/components/cart/cartItem.vue";
import CartDetails from "@/components/cart/cartDetails.vue"
import {useForm} from "@inertiajs/vue3";
import {Address} from "@/models/Address.ts";
import {ProductOrder} from "@/models/ProductOrder.ts";
import {createToaster} from "@meforma/vue-toaster";


import {useCartStore} from "@/stores/cart.ts";
import {onMounted, ref} from "vue";
import {ProductType} from "@/models/ProductType.js";

const toaster = createToaster();

const cartItems = ref<ProductType[]>()
const cartItemsTotalPrice = ref<{
    cartItemsTotalPrice: number
}>(0)
const totalItems = ref<{
    totalItems: number
}>()

const {getCartItems, getTotalPrice, getTotalItems, clearCart} = useCartStore()

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

const order = useForm<{
    address: Address,
    totalPrice: number,
    products: ProductOrder[]
}>({
    products: [],
    totalPrice: 0,
    address: {
        user: null,
        phone_number: "",
        city: "",
        address: "",
        postal_code: 0
    }
})

const checkout = () => {
    order.totalPrice = cartItemsTotalPrice.value
    cartItems.value.forEach(item => {
        const cart: ProductOrder = {
            productId: item.id,
            productQty: item.quantity
        }

        order.products.push(cart)
    })

    order.post('/checkout', {
        onError: () => {
            toaster.error("Une erreur s'est produite lors du traitement de votre commande. Veuillez réessayer plus tard.")
        },
        onSuccess: () => {
            toaster.success("Commande passée avec succès.")
            order.reset()
            clearCart()
        }
    })

}


</script>

<template>
    <main class="container mx-auto lg:px-0 px-4">
        <section class="bg-white py-4 antialiased md:pb-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <div class="grid md:grid-cols-[1fr_300px] gap-8 max-w-6xl mx-auto px-4 md:px-6 py-12">
                    <div class="grid gap-6">
                        <div class="grid gap-4">
                            <h1 class="text-2xl font-bold">Panier d'achat</h1>
                            <p class="text-gray-500 dark:text-gray-400">Vérifiez les articles dans votre panier et
                                procédez au paiement.</p>
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
                    <cart-details
                        @checkout="checkout"
                        :address="order.address"
                        :total-price="cartItemsTotalPrice"
                        v-if="totalItems >= 1"/>


                </div>
            </div>
        </section>
    </main>
</template>

<style scoped>

</style>
