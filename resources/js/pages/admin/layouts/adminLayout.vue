<script setup>

import sidebar from '@/pages/partials/sidebar.vue';

import {ref} from 'vue';
import Sidebar from "@/pages/partials/sidebar.vue";
import TopBar from "@/pages/partials/top-bar.vue";
import Dashboard from "@/pages/admin/layouts/menu/dashboard.vue";
import Apps from "@/pages/admin/layouts/menu/apps.vue";
import Pages from "@/pages/admin/layouts/menu/pages.vue";
import Others from "@/pages/admin/layouts/menu/others.vue";
import ProfileDropdown from "@/pages/admin/layouts/profile-dropdown.vue";


</script>

<template>
    <div style="--sidebar-width:16rem;--sidebar-width-icon:3rem"
         class="group/sidebar-wrapper has-[[data-variant=inset]]:bg-sidebar flex min-h-svh w-full">
        <div class="flex h-screen grow">
            <sidebar>
                <template v-slot:dashboard>
                    <dashboard/>
                </template>
                <template v-slot:apps>
                   <apps/>
                </template>
                <template v-slot:pages>
                    <pages/>
                </template>
                <template v-slot:others>
                    <others/>
                </template>
            </sidebar>
            <div class="w-full">
                <top-bar>
                    <template v-slot:profile-dropdown>
                        <profile-dropdown/>
                    </template>
                </top-bar>
                <main class="min-h-full p-4">
                    <div class="space-y-4">
                        <slot/>
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>


<style scoped>
#nprogress {
    pointer-events: none
}

#nprogress .bar {
    background: hsl(var(--primary));
    position: fixed;
    z-index: 1600;
    top: 0;
    left: 0;
    width: 100%;
    height: 2px
}

#nprogress .peg {
    display: block;
    position: absolute;
    right: 0;
    width: 100px;
    height: 100%;
    box-shadow: none;
    opacity: 1;
    -webkit-transform: rotate(3deg) translate(0px, -4px);
    -ms-transform: rotate(3deg) translate(0px, -4px);
    transform: rotate(3deg) translate(0px, -4px)
}

#nprogress .spinner {
    display: block;
    position: fixed;
    z-index: 1600;
    top: 15px;
    right: 15px
}

#nprogress .spinner-icon {
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    border: 2px solid transparent;
    border-top-color: hsl(var(--primary));
    border-left-color: hsl(var(--primary));
    border-radius: 50%;
    -webkit-animation: nprogress-spinner 400ms linear infinite;
    animation: nprogress-spinner 400ms linear infinite
}

.nprogress-custom-parent {
    overflow: hidden;
    position: relative
}

.nprogress-custom-parent #nprogress .bar, .nprogress-custom-parent #nprogress .spinner {
    position: absolute
}

@-webkit-keyframes nprogress-spinner {
    0% {
        -webkit-transform: rotate(0deg)
    }
    100% {
        -webkit-transform: rotate(360deg)
    }
}

@keyframes nprogress-spinner {
    0% {
        transform: rotate(0deg)
    }
    100% {
        transform: rotate(360deg)
    }
}
</style>
