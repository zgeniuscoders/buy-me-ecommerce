<template>
    <span
        class="count">
        {{ itemCount }}
    </span>
</template>


<script setup lang="ts">

import emit from "tiny-emitter/instance.js"
import { useCartStore } from "../../stores/cart";
import { onMounted, ref } from "vue";

const itemCount = ref(0)
const { getTotalItems } = useCartStore()

onMounted(() => {
    itemCount.value = getTotalItems()
})

emit.on("cartUpdated", () => {
    itemCount.value = getTotalItems()
})

</script>

<style scoped></style>
