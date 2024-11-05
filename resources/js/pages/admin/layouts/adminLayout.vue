<script setup>

import navbarMain from '../partials/navbar-main.vue';
import sidebar from '@/pages/partials/sidebar.vue';

import { ref } from 'vue';

const menus = ref([
    {
        name: "Accueil",
        url: "/admin",
        logo: "grid-outline"
    },
    {
        name: "Categories",
        url: "/admin/categories",
        logo: "albums-outline"
    },
    {
        name: "Clients",
        url: "/admin/clients",
        logo: "people-outline"
    },
    {
        name: "Boutiques",
        url: "/admin/boutiques",
        logo: "storefront-outline"
    },
    {
        name: "Utilisateurs",
        url: "/admin/utilisateurs",
        logo: "person-outline"
    },
    {
        name: "Parametres",
        url: "/admin/clients",
        logo: "settings-outline"
    },

])

</script>

<template>
    <div>
        <navbar-main />
        <div class="flex pt-16 overflow-hidden bg-background dark:bg-background-dark">
            <sidebar :menus="menus" />
            <div id="main-content"
                class="relative w-full h-full overflow-y-auto bg-background dark:bg-background-dark lg:ml-64">
                <main>
                    <slot />
                </main>
            </div>

        </div>
    </div>
</template>