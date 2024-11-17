<script setup lang="ts">

import GroupSidebarItems from "@/pages/partials/group-sidebar-items.vue";
import {ref} from "vue";
import {MenuItem} from "@/models/MenuItem.ts";
import {Home} from "lucide-vue-next";
import SidebarItems from "@/pages/partials/sidebar-items.vue";

const items = ref<{
    items: MenuItem[]
}>({
    items: [
        {
            icon: Home,
            title: "Dashboard",
            link: "/mon-compte",
            submenus: null
        },
        {
            icon: Home,
            title: "Articles Favorie",
            link: "/mon-compte/articles-favorite",
            submenus: null
        },
        {
            icon: Home,
            title: "Mes commandes",
            link: "/mon-compte/commandes",
            submenus: null
        }
    ]
})
</script>

<template>
    <group-sidebar-items name="Dashboard">
        <sidebar-items :items="items.items"/>
    </group-sidebar-items>
</template>

<style scoped>

</style>
