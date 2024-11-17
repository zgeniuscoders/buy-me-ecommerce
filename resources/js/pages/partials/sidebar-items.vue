<script setup lang="ts">

import {SidebarMenuButton, SidebarMenuItem} from "@/components/ui/sidebar";
import {Link} from "@inertiajs/vue3";
import {MenuItem} from "@/models/MenuItem.ts";

const {items} = defineProps<{
    items: MenuItem[]
}>()
</script>

<template>
    <template v-for="item in items" :key="item">
        <SidebarMenuItem>
            <SidebarMenuButton asChild>
                <Link :href="item.link">
                    <component :is="item.icon">

                    </component>
                    <span>{{ item.title }}</span>
                </Link>
            </SidebarMenuButton>
        </SidebarMenuItem>
    </template>
</template>

<style scoped>

</style>
