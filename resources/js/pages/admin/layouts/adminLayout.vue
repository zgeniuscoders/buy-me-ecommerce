<script setup>

import TopBar from "@/pages/partials/top-bar.vue";
import Apps from "@/pages/admin/layouts/menu/apps.vue";
import Pages from "@/pages/admin/layouts/menu/pages.vue";
import ProfileDropdown from "@/pages/admin/layouts/profile-dropdown.vue";
import Default from "@/pages/layouts/default.vue";
import {CommandGroup, CommandItem, CommandSeparator} from "@/components/ui/command";
import {ref} from "vue";
import {Home, Users} from "lucide-vue-next";
import GroupSidebarItems from "@/pages/partials/group-sidebar-items.vue";
import SidebarItems from "@/pages/partials/sidebar-items.vue";
import {Link} from "@inertiajs/vue3";


const dashboardItems = ref({
    items: [
        {
            title: "Accueil",
            icon: Home,
            link: "/admin",
            submenus: null
        }, {
            title: "Clients",
            icon: Users,
            link: "/admin/clients",
            submenus: null
        },

    ]
})


</script>

<template>

    <default>
        <template v-slot:sidebar>
            <group-sidebar-items name="Dashboard">
                <sidebar-items :items="dashboardItems.items"/>
            </group-sidebar-items>
            <apps/>
            <pages/>
        </template>
        <template v-slot:topbar>
            <top-bar>
                <template v-slot:profile-dropdown>
                    <profile-dropdown/>
                </template>
                <template v-slot:command>
                    <CommandGroup heading="Suggestions">
                        <CommandItem value="calendar">
                            Calendar
                        </CommandItem>
                        <CommandItem value="search-emoji">
                            Search Emoji
                        </CommandItem>
                        <CommandItem value="calculator">
                            Calculator
                        </CommandItem>
                    </CommandGroup>
                    <CommandSeparator/>
                    <CommandGroup heading="Dashboard">
                        <template v-for="dashboardItem in dashboardItems.items" :key="dashboardItem">
                            <CommandItem :value="dashboardItem.title">
                                <Link :href="dashboardItem.link">{{ dashboardItem.title}}</Link>
                            </CommandItem>
                        </template>
                    </CommandGroup>
                </template>
            </top-bar>
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
