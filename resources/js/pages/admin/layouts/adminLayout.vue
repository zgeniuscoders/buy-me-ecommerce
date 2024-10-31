<script setup>

import navbarMain from '../partials/navbar-main.vue';
import sidebar from '@/pages/partials/sidebar.vue';

import { ref } from 'vue';

const menus = ref([
    {
        name: "accueil",
        url: "/admin",
        logo: "grid"
    },
    {
        name: "categories",
        url: "/admin/categories",
        logo: "grid"
    },
    {
        name: "Utilisateurs",
        url: "/admin/utilisateurs",
        logo: "product"
    },
    {
        name: "clients",
        url: "/admin/clients",
        logo: "persons"
    },
    {
        name: "clients",
        url: "/ma-boutique/clients",
        logo: "persons"
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