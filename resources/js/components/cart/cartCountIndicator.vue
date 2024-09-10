<template>
    <div
        class="bg-red-500 rounded-full text-white absolute w-4 h-4 text-center text-sm -top-2 right-0 flex items-center justify-center">
        {{ itemCount }}
    </div>
</template>


<script setup lang="ts">
import emit from "tiny-emitter/instance.js"
import { useCartStore } from "../../stores/cart";
import { onMounted, ref } from "vue";

const itemCount = ref(0)
const { totalItems,getTotalItems } = useCartStore()

onMounted(() => {
    itemCount.value = totalItems
})

emit.on("cartChange", () => {
    itemCount.value = getTotalItems()
})

</script>

<style scoped></style>
