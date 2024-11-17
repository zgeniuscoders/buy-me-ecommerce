<script setup lang="ts">

import {DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuTrigger} from "@/components/ui/dropdown-menu";
import {Sidebar, SidebarContent, SidebarHeader, SidebarMenuButton} from "@/components/ui/sidebar";
import {ChevronDown} from "lucide-vue-next";

</script>

<template>
    <Sidebar>
        <SidebarHeader>
            <DropdownMenu>
                <DropdownMenuTrigger asChild>
                    <SidebarMenuButton>
                        Select Workspace
                        <ChevronDown className="ml-auto"/>
                    </SidebarMenuButton>
                </DropdownMenuTrigger>
                <DropdownMenuContent className="w-[--radix-popper-anchor-width]">
                    <DropdownMenuItem>
                        <span>Acme Inc</span>
                    </DropdownMenuItem>
                    <DropdownMenuItem>
                        <span>Acme Corp.</span>
                    </DropdownMenuItem>
                </DropdownMenuContent>
            </DropdownMenu>
        </SidebarHeader>
        <SidebarContent>
            <slot/>
        </SidebarContent>
    </Sidebar>
</template>

<style scoped>

</style>
