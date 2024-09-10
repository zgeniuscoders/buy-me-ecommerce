<script setup lang="ts">
import emitter from "tiny-emitter/instance.js";
import { onMounted, ref } from "vue";
import { useCartStore } from "../../stores/cart";
const { updateQuantity } = useCartStore()

const qty = ref(0)
const props = defineProps({
    productId: 0,
    qty: 0
})

onMounted(() => {
    qty.value = props.qty
})

const incrementItemQty = () => {
    qty.value++

    updateQuantity(props.productId, qty.value)
    emitter.emit("cartChange")
}
</script>

<template>
    <button @click="incrementItemQty" type="button" id="increment-button" data-input-counter-increment="counter-input"
        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 1v16M1 9h16" />
        </svg>
    </button>
</template>

<style scoped></style>
