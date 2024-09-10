<script setup lang="ts">
    const props = defineProps({
        qty: 0
    })
</script>

<template>
    <input type="text" id="counter-input" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0" placeholder="" :value="props.qty" required />
</template>

<style scoped>

</style>
