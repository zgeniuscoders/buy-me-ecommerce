<script setup lang="ts">

import {
    SidebarGroup,
    SidebarGroupContent,
    SidebarGroupLabel,
    SidebarMenu
} from "@/components/ui/sidebar";

const {name} = defineProps<{
    name: string
}>()
</script>

<template>
    <SidebarGroup>
        <SidebarGroupLabel>{{ name }}</SidebarGroupLabel>
        <SidebarGroupContent>
            <SidebarMenu>
                <slot/>
            </SidebarMenu>
        </SidebarGroupContent>
    </SidebarGroup>
</template>

<style scoped>

</style>
