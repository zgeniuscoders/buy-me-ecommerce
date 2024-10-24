<template>
    <div class="pt-2 space-y-2">

        <template v-for="menu in menus.menus" :key="menu">
            <Link :href='menu.url' :class="{ 'bg-secondaryContainer': $page.url === menu.url }"
                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-200 group">

            <svg aria-hidden="true"
                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                :class="{ 'text-gray-900': $page.url === '/admin' }" xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                <path
                    d="M200-520q-33 0-56.5-23.5T120-600v-160q0-33 23.5-56.5T200-840h160q33 0 56.5 23.5T440-760v160q0 33-23.5 56.5T360-520H200Zm0 400q-33 0-56.5-23.5T120-200v-160q0-33 23.5-56.5T200-440h160q33 0 56.5 23.5T440-360v160q0 33-23.5 56.5T360-120H200Zm400-400q-33 0-56.5-23.5T520-600v-160q0-33 23.5-56.5T600-840h160q33 0 56.5 23.5T840-760v160q0 33-23.5 56.5T760-520H600Zm0 400q-33 0-56.5-23.5T520-200v-160q0-33 23.5-56.5T600-440h160q33 0 56.5 23.5T840-360v160q0 33-23.5 56.5T760-120H600ZM200-600h160v-160H200v160Zm400 0h160v-160H600v160Zm0 400h160v-160H600v160Zm-400 0h160v-160H200v160Zm400-400Zm0 240Zm-240 0Zm0-240Z" />
            </svg>
            <span class="ml-3" sidebar-toggle-item> {{ menu.name }}</span>
            </Link>
        </template>

    </div>
</template>

<script setup lang="ts">
import { MenuItemProps } from '@/utils/MenuItemProps';
import { Link } from '@inertiajs/vue3';

const menus = defineProps<MenuItemProps>()

</script>
