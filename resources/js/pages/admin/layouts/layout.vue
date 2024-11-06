<template>
    <div>
        <navbar-main @toggleSidebarMobile="toggleSidebarMobile" />
        <div class="flex pt-16 overflow-hidden bg-background dark:bg-background-dark">
            <sidebar :menus="menus" :toggleSidebarMobile="state.toggleSidebarMobile" />
            <div id="main-content"
                class="relative w-full h-full overflow-y-auto bg-background dark:bg-background-dark lg:ml-64">
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
        name: "Accueil",
        url: "/ma-boutique",
        logo: "grid-outline"
    },
    {
        name: "Articles",
        url: "/ma-boutique/articles",
        logo: "albums-outline"
    },
    {
        name: "Commandes",
        url: "/ma-boutique/commandes",
        logo: "list-circle-outline"
    },
    {
        name: "Ma boutique",
        url: "/ma-boutique/parametres",
        logo: "storefront-outline"
    },
])

const state = ref({
    toggleSidebarMobile: false
})

const toggleSidebarMobile = () => {
    state.value.toggleSidebarMobile = !state.value.toggleSidebarMobile
}
</script>
