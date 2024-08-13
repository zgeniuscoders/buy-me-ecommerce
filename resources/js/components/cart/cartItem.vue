<script setup>
import Quantity from "./quantity.vue";
import DecrementButton from "./decrementButton.vue";
import IncrementButton from "./incrementButton.vue";
import emitter from "tiny-emitter/instance.js";
import {onMounted} from "vue";
import useCart from "../../services/index.js";

onMounted(() => {
    emitter.on("decrementItemQty", (id) => {
        onQtyDecrement(id)
    })

    emitter.on("incrementItemQty", (id) => {
        onQtyIncrement(id)
    })
})

const {updateItem, response} = useCart()

const props = defineProps({
    product: {},
    quantity: 0
})

const onQtyIncrement = async () => {
    let qty = props.product.quantity

    qty++
    await updateItem(props.product.product.id, {
        "qty": qty
    })

    if (response.value.status === 200) {
        emitter.emit('productChanged')
    }

}

const onQtyDecrement = async () => {
    let qty = props.product.quantity
    if (qty !== 1) {
        qty--
        await updateItem(props.product.product.id, {
            "qty": qty
        })

        if (response.value.status === 200) {
            emitter.emit('productChanged')
        }
    }
}


</script>

<template>
    <div class="space-y-6">

        <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6">
            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                <a href="#" class="shrink-0 md:order-1">
                    <!--                    <img class="h-20 w-20 dark:hidden" src="/storage/{{props.product['product'].image}}" alt="{{props.product.name}} image" />-->
                    <!--                    <img class="hidden h-20 w-20 dark:block" src="/storage/{{props.product['product'].image}}" alt="{{props.product.name}}" />-->
                </a>

                <label for="counter-input" class="sr-only">Choose quantity:</label>
                <div class="flex items-center justify-between md:order-3 md:justify-end">
                    <div class="flex items-center">
                        <decrement-button/>
                        <quantity :qty="props.product.quantity" :productId="props.product.id"/>
                        <increment-button/>
                    </div>
                    <div class="text-end md:order-4 md:w-32">
                        <p class="text-base font-bold text-gray-900">${{ props.product['product'].price }}</p>
                    </div>
                </div>

                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                    <a href="#"
                       class="text-base font-medium text-gray-900 hover:underline">{{
                            props.product['product'].name
                        }}</a>

                    <div class="flex items-center gap-4">
                        <button type="button"
                                class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline">
                            <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                            </svg>
                            Add to Favorites
                        </button>

                        <button type="button"
                                class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                            <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                            </svg>
                            Remove
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<style scoped>

</style>
