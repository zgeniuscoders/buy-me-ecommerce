<script setup lang="ts">
const {navTitle,navLink} = defineProps<{
    navLink: string,
    navTitle: string,
}>()
</script>

<template>
    <li>
        <a target="" data-sidebar="menu-sub-button" data-size="md" :data-active="$page.url === navLink"
           class="text-sidebar-foreground ring-sidebar-ring hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover [&amp;>svg]:text-sidebar-accent-foreground flex h-7 min-w-0 -translate-x-px items-center gap-2 overflow-hidden rounded-md px-2 outline-none focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 data-[active=true]:bg-sidebar-accent data-[active=true]:text-sidebar-accent-foreground text-sm group-data-[collapsible=icon]:hidden"
           :href="navLink">
            <span>{{ navTitle}}</span>
        </a>
    </li>
</template>

<style scoped>

</style>
