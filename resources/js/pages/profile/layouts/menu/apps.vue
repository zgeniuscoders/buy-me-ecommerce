<script setup lang="ts">

import NavItem from "@/pages/partials/nav-item.vue";
</script>

<template>
    <div data-sidebar="group" class="relative flex w-full min-w-0 flex-col p-2">
        <div data-sidebar="group-label"
             class="text-sidebar-foreground/70 ring-sidebar-ring flex h-8 shrink-0 items-center rounded-md px-2 text-xs font-medium outline-none transition-[margin,opa] duration-200 ease-linear focus-visible:ring-2 [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 group-data-[collapsible=icon]:-mt-8 group-data-[collapsible=icon]:opacity-0">
            Apps
        </div>
        <div data-sidebar="group-content" class="w-full text-sm">
            <ul data-sidebar="menu" class="flex w-full min-w-0 flex-col gap-1">
                <nav-item nav-link="/ma-boutique/chat" nav-title="Chat">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-message-square size-4">
                        <path
                            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </nav-item>
            </ul>
        </div>
    </div>

</template>

<style scoped>

</style>
