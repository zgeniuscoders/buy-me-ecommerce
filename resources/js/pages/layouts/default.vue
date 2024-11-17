<script setup lang="ts">
import sidebar from '@/pages/partials/sidebar.vue';
import {SidebarProvider} from "@/components/ui/sidebar";
</script>

<template>
    <SidebarProvider>

        <sidebar>
            <slot name="sidebar"/>
        </sidebar>

        <div class="w-full">
            <slot name="topbar"/>
            <main class="min-h-full p-4">
                <div class="space-y-4">
                    <slot name="page"/>
                </div>
            </main>
        </div>
    </SidebarProvider>
</template>

<style scoped>

</style>
