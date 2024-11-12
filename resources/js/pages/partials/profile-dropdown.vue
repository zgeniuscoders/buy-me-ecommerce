<script setup lang="ts">
import {logout} from "@/services/Logout.ts";
import {User} from "@/models/User.ts";

const {showProfileDropdown, user} = defineProps<{
    showProfileDropdown: boolean,
    user: User
}>()


</script>

<template>
    <div data-side="bottom" data-align="end" role="menu" aria-orientation="vertical"
         :data-state="showProfileDropdown ? 'open' : 'close'"
         :class="showProfileDropdown ? 'block': 'hidden'"
         class="absolute right-0 top-16 z-50 overflow-hidden border bg-popover p-1 text-popover-foreground shadow-md data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2 w-[--radix-dropdown-menu-trigger-width] min-w-56 rounded-lg">
        <div class="text-sm p-0 font-normal">
            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                <span class="relative flex shrink-0 overflow-hidden h-8 w-8 rounded-lg">
                <img class="aspect-square h-full w-full" :alt="`photo profile de  ${user.name}`"
                     :src="user.profile" v-if="user.profile">

                    <div v-else class="aspect-square h-full w-full bg-primary text-white">
                        <span class="font-bold flex items-center justify-center h-full w-full capitalize">{{
                                user?.name?.charAt(0)
                            }}</span>
                    </div>

            </span>
                <div class="grid flex-1 text-left text-sm leading-tight"><span
                    class="truncate font-semibold">{{ user.name }}</span><span
                    class="truncate text-xs text-muted-foreground">{{ user.email }}</span></div>
            </div>
        </div>
        <slot/>
        <div role="menuitem" @click="logout"
             class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50"
             tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-log-out me-2 size-4">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" x2="9" y1="12" y2="12"></line>
            </svg>
            Se deconnecter
        </div>
    </div>
</template>

<style scoped>

</style>
