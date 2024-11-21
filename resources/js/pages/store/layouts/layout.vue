<script setup lang="ts">

import Default from "@/pages/layouts/default.vue";
import {ref} from "vue";
import {MenuItem} from "@/models/MenuItem.js";
import {Home, Users} from "lucide-vue-next";
import GroupSidebarItems from "@/pages/partials/group-sidebar-items.vue";
import SidebarItems from "@/pages/partials/sidebar-items.vue";

const dashboardMenu = ref<MenuItem[]>([
    {
        title: "Accueil",
        icon: Home,
        link: "/ma-boutique",
        submenus: null
    }, {
        title: "Articles",
        icon: Users,
        link: "/ma-boutique/articles",
        submenus: null
    }, {
        title: "Commandes",
        icon: Users,
        link: "/ma-boutique/commandes",
        submenus: null
    },

])


</script>
<template>
    <default>
        <template v-slot:sidebar>
            <group-sidebar-items name="Dashboard">
                <sidebar-items :items="dashboardMenu"/>
            </group-sidebar-items>
        </template>
        <template v-slot:page>
            <slot/>
        </template>
    </default>

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
