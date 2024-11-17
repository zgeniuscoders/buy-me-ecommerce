<script setup lang="ts">

import {SidebarMenuButton, SidebarMenuItem, SidebarMenuSub, SidebarMenuSubItem} from "@/components/ui/sidebar";
import {Collapsible, CollapsibleContent, CollapsibleTrigger} from "@/components/ui/collapsible";
import {Plus} from "lucide-vue-next";
import {MenuItem} from "@/models/MenuItem.ts";
import {Link} from "@inertiajs/vue3";

const {items} = defineProps<{
    items: MenuItem[]
}>()
</script>

<template>
    <template v-for="item in items" :key="item.title">

    <Collapsible :class="`group/${item.title}`">
            <SidebarMenuItem>

                <CollapsibleTrigger asChild>
                    <SidebarMenuButton>
                        <component :is="item.icon">

                        </component>
                        <span class="w-full">{{ item.title }}</span>
                        <Plus/>
                    </SidebarMenuButton>
                </CollapsibleTrigger>

                <CollapsibleContent>
                    <SidebarMenuSub class="space-y-2">
                        <template v-for="subitem in item.submenus" :key="subitem">
                            <SidebarMenuSubItem>
                                <Link :href="subitem.link">
                                    <span>{{ subitem.title }}</span>
                                </Link>
                            </SidebarMenuSubItem>
                        </template>
                    </SidebarMenuSub>
                </CollapsibleContent>
            </SidebarMenuItem>
    </Collapsible>
    </template>
        
</template>

<style scoped>

</style>
