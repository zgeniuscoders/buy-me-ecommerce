<template>
    <!-- Profile -->
    <div class="flex items-center ml-3">
        <div>
            <button type="button" @click="toggleMenu"
                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" :src="user.profile"
                    alt="user photo" v-if="user.profile">
                <div v-else
                    class="w-8 h-8 rounded-full bg-slate-900 text-white text-center flex items-center justify-center font-medium capitalize">
                    {{ user.name?.charAt(0) }}</div>
            </button>
        </div>
        <!-- Dropdown menu -->
        <div class="z-50 absolute top-14 right-0 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
            :class="state.showMenu ? 'block' : 'hidden'" id="dropdown-2">
            <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                    {{ user.name }}
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    {{ user.email }}
                </p>
            </div>
            <ul class="py-1" role="none">
                <li>
                    <Link href="/ma-boutique"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Dashboard</Link>
                </li>
                <li>
                    <Link href="/ma-boutique/parametres"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Parametres</Link>
                </li>
                <li>
                    <a href="#" @click.prevent="logout"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                        role="menuitem">Se deconnecter</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup lang="ts">
import { User } from '@/models/User';
import {Link} from "@inertiajs/vue3";
import {logout} from "@/services/Logout.ts";

import { ref } from 'vue';


const state = ref({
    showMenu: false
})

const { user } = defineProps<{
    user: User
}>()

const toggleMenu = () => {
    state.value.showMenu = !state.value.showMenu
}
</script>
