<script setup lang="ts">

import NavItem from "@/pages/partials/nav-item.vue";
import GroupSidebarItems from "@/pages/partials/group-sidebar-items.vue";
import {ref} from "vue";
import {MenuItem} from "@/models/MenuItem.ts";
import {MessageCircleHeartIcon} from "lucide-vue-next";
import SidebarItems from "@/pages/partials/sidebar-items.vue";

const items = ref<{items: MenuItem[]}>({
    items: [
        {
            icon: MessageCircleHeartIcon,
            title: "Chat",
            link: "/ma-boutique/chat",
            submenus: null
        }
    ]
})
</script>

<template>

    <group-sidebar-items name="Apps">
        <sidebar-items :items="items.items"/>
    </group-sidebar-items>

</template>

<style scoped>

</style>
