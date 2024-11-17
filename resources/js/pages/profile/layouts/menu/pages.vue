<script setup lang="ts">

import {ref} from "vue";
import GroupSidebarItems from "@/pages/partials/group-sidebar-items.vue";
import {MenuItem} from "@/models/MenuItem.ts";
import {Settings} from "lucide-vue-next";
import SidebarItemsDropdown from "@/pages/partials/sidebar-items-dropdown.vue";

const items = ref<{
    items: MenuItem[]
}>({
    items: [
        {
            icon: Settings,
            title: "Parametres",
            link: "",
            submenus: [
                {
                    icon: Settings,
                    title: "Profile",
                    link: "/mon-compte/profile",
                    submenus: null
                }
            ]
        }
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
