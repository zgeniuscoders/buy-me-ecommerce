<script setup lang="ts">
const {avatar, name, size} = defineProps<{
    avatar: string | null,
    name: string,
    size: string
}>()
</script>

<template>
<span class="relative flex shrink-0 overflow-hidden rounded-full border" :class="size">
    <img class="aspect-square h-full w-full" :alt="`photo profile de ${name}`"
         :src="avatar" v-if="avatar">

    <div class="aspect-square h-full w-full flex items-center justify-center" v-else>
        <span class="font-medium capitalize">{{ name?.charAt(0) }}</span>
    </div>

    <div class="w-3 h-3 absolute rounded-full end-0 bottom-0 bg-green-400">

    </div>
</span>
</template>

<style scoped>

</style>
