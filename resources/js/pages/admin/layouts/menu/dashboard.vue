<script setup lang="ts">
import {Home, Users} from "lucide-vue-next";
import GroupSidebarItems from "@/pages/partials/group-sidebar-items.vue";
import SidebarItems from "@/pages/partials/sidebar-items.vue";
import {MenuItem} from "@/models/MenuItem.ts";
import {ref} from "vue";


const items = ref<{items: MenuItem[]}>({
    items: [
        {
            title: "Accueil",
            icon: Home,
            link: "/admin",
            submenus: null
        }, {
            title: "Clients",
            icon: Users,
            link: "/admin/clients",
            submenus: null
        },

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
