<script setup lang="ts">

import {Link} from "@inertiajs/vue3";

const {navLink, navTitle} = defineProps<{
    navLink: string,
    navTitle: string
}>()
</script>

<template>
    <li data-sidebar="menu-item" class="group/menu-item relative">
        <Link target=""
              data-sidebar="menu-button"
              data-size="default"
              :data-active="$page.url === navLink"
              class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
              data-state="closed"
              :href="navLink">
            <slot/>
            <span>{{ navTitle }}</span>
        </Link>
    </li>
</template>

<style scoped>

</style>
