<script setup lang="ts">

import {ref} from "vue";
import {MenuItem} from "@/models/MenuItem.ts";
import {Settings} from "lucide-vue-next";
import GroupSidebarItems from "@/pages/partials/group-sidebar-items.vue";
import SidebarItemsDropdown from "@/pages/partials/sidebar-items-dropdown.vue";

const items = ref<{ items: MenuItem[] }>({
    items: [
        {
            title: "Parametres",
            icon: Settings,
            link: "/admin",
            submenus: [
                {
                    icon: Settings,
                    link: "/ma-boutique/parametres",
                    title: "Ma boutique",
                    submenus: null
                }
            ]
        },
    ]
})

</script>

<template>
    <group-sidebar-items name="Pages">
        <sidebar-items-dropdown :items="items.items"/>
    </group-sidebar-items>
</template>

<style scoped>

</style>
