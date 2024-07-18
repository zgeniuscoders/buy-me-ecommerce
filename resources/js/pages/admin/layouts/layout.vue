<template>
    <div>
        <navbar-main />
        <div class="flex pt-16 overflow-hidden bg-gray-50">
            <sidebar />
            <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
                <main>
                    <slot />
                </main>
            </div>

        </div>
    </div>
</template>

<script setup>
import navbarMain from '../partials/navbar-main.vue';
import sidebar from '../partials/sidebar.vue';
</script>
