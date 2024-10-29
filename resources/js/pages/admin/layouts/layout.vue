<template>
    <div>
        <navbar-main />
        <div class="flex pt-16 overflow-hidden bg-background dark:bg-background-dark">
            <sidebar :menus="menus"/>
            <div id="main-content" class="relative w-full h-full overflow-y-auto bg-background dark:bg-background-dark lg:ml-64">
                <main>
                    <slot />
                </main>
            </div>

        </div>
    </div>
</template>

<script setup>
import navbarMain from '../partials/navbar-main.vue';
import sidebar from '../../partials/sidebar.vue';
import { ref } from 'vue';

const menus = ref([
    {
        name: "accueil",
        url: "/ma-boutique",
        logo: "grid"
    },
    {
        name: "articles",
        url: "/ma-boutique/articles",
        logo: "product"
    },
    {
        name: "commandes",
        url: "/ma-boutique/commandes",
        logo: "persons"
    },
])
</script>
