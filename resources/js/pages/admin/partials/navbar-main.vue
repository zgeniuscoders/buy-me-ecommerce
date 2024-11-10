<template>
  <nav class="fixed z-30 w-full bg-background dark:bg-background-dark border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">

          <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" @click="$emit('toggleSidebarMobile')"
            class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100">
            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>

          <a href="" class="flex ml-2 md:mr-24">
            <!-- <img src="" class="h-8 mr-3" alt="FlowBite Logo" /> -->
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Matrixt </span>
          </a>
          <search-bar />
        </div>

        <div class="flex items-center">

          <!-- Search mobile -->
          <button id="toggleSidebarMobileSearch" type="button"
            class="p-2 text-gray-500 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100">
            <span class="sr-only">Search</span>
            <!-- Search icon -->
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
            </svg>
          </button>

<!--          <notification-dropdown />-->
<!--          <app-dropdown />-->

          <profile-dropsown :user="user" />
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import notificationDropdown from './notification-dropdown.vue';
import appDropdown from './app-dropdown.vue';
import ProfileDropsown from './profile-dropsown.vue';
import SearchBar from '../../partials/search-bar.vue';
import { onMounted, ref } from 'vue';
import { router } from '@inertiajs/vue3';
import axios from 'axios';

const user = ref({})

const res = axios.get('/user').then(res => {
  user.value = res.data
})

onMounted(() => {
  const res = axios.get('/user').then(res => {
    user.value = res.data
  })

})
</script>
