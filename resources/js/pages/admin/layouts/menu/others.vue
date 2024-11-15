<script setup lang="ts">

import NavItemsDropdown from "@/pages/partials/nav-items-dropdown.vue";
import NavItem from "@/pages/partials/nav-item.vue";
import {ref} from "vue";

const state = ref<{
    settingsMenu: boolean
}>({
    settingsMenu: true
})

</script>

<template>
    <div data-sidebar="group" class="relative flex w-full min-w-0 flex-col p-2">
        <div data-sidebar="group-label"
             class="text-sidebar-foreground/70 ring-sidebar-ring flex h-8 shrink-0 items-center rounded-md px-2 text-xs font-medium outline-none transition-[margin,opa] duration-200 ease-linear focus-visible:ring-2 [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 group-data-[collapsible=icon]:-mt-8 group-data-[collapsible=icon]:opacity-0">
            Others
        </div>
        <div data-sidebar="group-content" class="w-full text-sm">
            <ul data-sidebar="menu" class="flex w-full min-w-0 flex-col gap-1">
                <nav-items-dropdown :is-showing="state.settingsMenu" nav-title="Reseaux social">
                    <template v-slot:svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-users size-4">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </template>
                    <nav-item nav-link="/admin/social-network" nav-title="Tout les reseaux"/>
                    <nav-item nav-link="/admin/social-network/create" nav-title="Ajouter un lien"/>
                </nav-items-dropdown>
            </ul>
        </div>
    </div>

</template>

<style scoped>

</style>
