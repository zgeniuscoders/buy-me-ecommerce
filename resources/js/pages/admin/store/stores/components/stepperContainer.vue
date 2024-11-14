<script setup lang="ts">

import { provide, readonly, ref } from "vue";

const count = ref(1)
provide("stepperCount", {
    count: readonly(count),
    increment: () => count.value++,
    decrement: () => count.value--,
})

</script>


<template>
    <slot></slot>
</template>