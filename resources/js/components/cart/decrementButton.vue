<script setup lang="ts">
import emitter from "tiny-emitter/instance.js";

const decrementItemQty = () => {
    emitter.emit("decrementItemQty")
}
</script>

<template>
    <button @click="decrementItemQty" type="button" id="decrement-button"
            data-input-counter-decrement="counter-input"
            class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 18 2">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
        </svg>
    </button>
</template>

<style scoped>

</style>
