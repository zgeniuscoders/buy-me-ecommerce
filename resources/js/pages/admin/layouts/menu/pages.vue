<script setup lang="ts">

import {ref} from "vue";
import GroupSidebarItems from "@/pages/partials/group-sidebar-items.vue";
import SidebarItemsDropdown from "@/pages/partials/sidebar-items-dropdown.vue";
import {MenuItem} from "@/models/MenuItem.ts";

import {Users,Rss,Settings,PackageSearch} from "lucide-vue-next";

const state = ref<{
    settingsMenu: boolean
}>({
    settingsMenu: true
})

const items = ref<{
    items: MenuItem[]
}>([
    {
        icon: Users,
        title: "Utilisateurs",
        link: "/admin/utilisateurs",
        submenus: [
            {
                icon: Users,
                title: "Statistiques",
                link: "/admin/statistiques",
                submenus: null
            },
            {
                icon: Users,
                title: "Utilisateurs",
                link: "/admin/utilisateurs",
                submenus: null
            },
            {
                icon: Users,
                title: "Ajouter un role",
                link: "/admin/roles/create",
                submenus: null
            },
            {
                icon: Users,
                title: "Ajouter un utilisateur",
                link: "/admin/utilisateurs/create",
                submenus: null
            }
        ]
    },
    {
        icon: PackageSearch,
        title: "Categories",
        link: "/admin/utilisateurs",
        submenus: [
            {
                icon: Users,
                title: "Categories",
                link: "/admin/categories",
                submenus: null
            },
            {
                icon: Users,
                title: "Ajouter une categorie",
                link: "/admin/categories/create",
                submenus: null
            }
        ]
    },
    {
        icon: Rss,
        title: "Publicités",
        link: "/admin/utilisateurs",
        submenus: [
            {
                icon: Users,
                title: "Publicités",
                link: "/admin/ads",
                submenus: null
            },
            {
                icon: Users,
                title: "Publier une publicités",
                link: "/admin/ads/create",
                submenus: null
            }
        ]
    },
    {
        icon: Settings,
        title: "Parametres",
        link: "/admin/utilisateurs",
        submenus: [
            {
                icon: Users,
                title: "Profile",
                link: "",
                submenus: null
            },
        ]
    },
])

</script>

<template>

    <group-sidebar-items name="Pages">
        <sidebar-items-dropdown :items="items"/>
    </group-sidebar-items>

</template>

<style scoped>

</style>
