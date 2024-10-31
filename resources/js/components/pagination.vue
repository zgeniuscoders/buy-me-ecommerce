<script setup lang="ts">
import { ref } from 'vue';


const page = defineProps({
    nextPageUri: String,
    previousPageUrl: String
})

</script>

<template>
    <div class="p-4 flex items-center justify-between">
        <template v-if="page.nextPageUri">
            <Link :href='page.nextPageUri'
                class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
            Suivant</Link>
        </template>

        <template v-if="page.previousPageUrl">
            <Link :href='page.previousPageUrl'
                class="rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
            Precedent</Link>
        </template>
    </div>
</template>
