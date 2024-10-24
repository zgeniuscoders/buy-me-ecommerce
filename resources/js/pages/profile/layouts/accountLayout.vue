<script lang="ts" setup>
import sidebar from '@/pages/partials/sidebar.vue';
import navbarMain from '@/pages/admin/partials/navbar-main.vue';

import { ref } from 'vue';

const menus = ref(
    [
        {
            name: "Accueil",
            url: "/mon-compte",
            logo: "grid"
        },
        {
            name: "Favoris",
            url: "/mon-compte/favoris",
            logo: "heart"
        },
        {
            name: "Profile",
            url: "/mon-compte/profile",
            logo: "person"
        },
    ]
)

</script>

<template>
    <div>
        <navbar-main />
        <div class="flex pt-16 overflow-hidden bg-background dark:bg-background-dark">
            <sidebar :menus="menus"/>
            <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
                <main>
                    <slot />
                </main>
            </div>

        </div>
    </div>
</template>