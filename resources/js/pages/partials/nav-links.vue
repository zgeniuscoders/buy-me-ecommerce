<template>
    <div class="pt-2 space-y-2">

        <template v-for="menu in menus" :key="menu">
            <Link :href='menu.url' :class="{ 'bg-gray-200': $page.url === menu.url }"
                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-200 group">

           
            <ion-icon :name="menu.logo"></ion-icon>

            <span class="ml-3" sidebar-toggle-item> {{ menu.name }}</span>
            </Link>
        </template>

    </div>
</template>

<script setup lang="ts">
import { MenuItemProps } from '@/utils/MenuItemProps';
import { Link } from '@inertiajs/vue3';

const {menus} = defineProps<MenuItemProps>()

</script>
