<template>
    <div>
        <navbar-main />
        <div class="flex pt-16 overflow-hidden bg-gray-50">
            <sidebar />
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

<script setup>
import navbarMain from '../partials/navbar-main.vue';
import sidebar from '../partials/sidebar.vue';
</script>
