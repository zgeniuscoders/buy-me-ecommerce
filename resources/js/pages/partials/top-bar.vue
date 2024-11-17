<script setup lang="ts">

import ProfileDropdown from "@/pages/partials/profile-dropdown.vue";
import {onMounted, ref} from "vue";
import {User} from "@/models/User.ts";
import axios from "axios";
import {
    Popover,
    PopoverContent,
    PopoverTrigger,
} from '@/components/ui/popover'
import {ScrollArea} from '@/components/ui/scroll-area'
import {Separator} from '@/components/ui/separator'
import {Link} from "@inertiajs/vue3";
import {SidebarTrigger} from "@/components/ui/sidebar";

const showProfileDown = ref(false)

const toggleProfileDropdown = () => {
    showProfileDown.value = !showProfileDown.value;
}

const state = ref<{
    user: User
}>({
    user: {} as User
})

axios.get("/user").then(res => {
    state.value.user = res.data as User
})

onMounted(() => {

})

</script>

<template>
    <div class="sticky top-0 z-10 flex flex-col">
        <header class="flex h-14 items-center gap-2 border-b bg-background px-4 lg:h-[60px]">

            <SidebarTrigger class="h-7 w-7 *:size-5"/>

            <!--            search -->
            <div class="w-full flex-1">
                <div>
                    <div class="relative max-w-sm flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round"
                             class="lucide lucide-search absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-neutral-500 dark:text-neutral-400">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                        <input type="search"
                               class="flex border-input bg-background px-3 py-2 file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus:border-primary focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-50 h-9 w-full cursor-pointer rounded-md border pl-10 pr-4 text-sm shadow-sm"
                               placeholder="Search...">
                        <div
                            class="absolute right-2 top-1/2 hidden -translate-y-1/2 items-center gap-0.5 rounded-sm bg-zinc-200 p-1 font-mono text-xs font-medium dark:bg-neutral-700 sm:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round"
                                 class="lucide lucide-command h-3 w-3">
                                <path
                                    d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3"></path>
                            </svg>
                            <span>k</span></div>
                    </div>
                </div>
            </div>

            <!--            messages -->
<!--            <Popover>-->
<!--                <PopoverTrigger as-child>-->
<!--                    <Button class="h-9 px-3 relative">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"-->
<!--                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
<!--                             stroke-linejoin="round" class="lucide lucide-mail animate-tada h-5 w-5">-->
<!--                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>-->
<!--                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>-->
<!--                        </svg>-->
<!--                        <div-->
<!--                            class="inline-flex border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 absolute bottom-[calc(100%-10px)] left-[calc(100%-12px)] h-4 w-4 items-center justify-center rounded-full p-0 text-[8px] font-semibold">-->
<!--                            3-->
<!--                        </div>-->
<!--                    </Button>-->
<!--                </PopoverTrigger>-->
<!--                <PopoverContent class="w-80">-->
<!--                    <div class="py-1.5 text-sm font-semibold">-->
<!--                        <div class="border-default-100 flex justify-between border-b px-4 py-3">-->
<!--                            <div class="text-default-800 text-sm font-medium">Messages</div>-->
<!--                            <div class="text-default-800 text-xs md:text-right">-->
<!--                                <Link class="underline" href="/ma-boutique/chat">View all</Link>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <ScrollArea class="h-64">-->
<!--                        <div class="">-->
<!--                            <template v-for="i in 10" :key="i">-->
<!--                                <div class="flex flex-1 items-start gap-2">-->
<!--                                    <div class="flex-none">-->
<!--                                        <span-->
<!--                                            class="relative flex shrink-0 overflow-hidden rounded-full h-8 w-8"><span-->
<!--                                            class="flex h-full w-full items-center justify-center rounded-full bg-muted"> S</span>-->
<!--                                        </span>-->
<!--                                    </div>-->
<!--                                    <div class="flex flex-1 flex-col gap-0.5">-->
<!--                                        <div-->
<!--                                            class="text-default-600 dark:group-hover:text-default-800 truncate text-sm font-normal">-->
<!--                                            Savannah Nguyen-->
<!--                                        </div>-->
<!--                                        <div-->
<!--                                            class="text-default-600 dark:group-hover:text-default-700 line-clamp-1 text-xs font-light">-->
<!--                                            Hi! How are you doing?.....-->
<!--                                        </div>-->
<!--                                        <div class="text-default-400 dark:group-hover:text-default-500 text-xs"> 05 am-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <Separator class="my-2"/>-->
<!--                            </template>-->
<!--                        </div>-->
<!--                    </ScrollArea>-->
<!--                </PopoverContent>-->
<!--            </Popover>-->
            <!--            <button-->
            <!--                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 underline-offset-4 hover:underline h-9 rounded-md px-3 relative text-foreground"-->
            <!--                type="button" id="radix-:R3d7rqba:" aria-haspopup="menu" aria-expanded="false"-->
            <!--                data-state="closed">-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"-->
            <!--                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
            <!--                     stroke-linejoin="round" class="lucide lucide-mail animate-tada h-5 w-5">-->
            <!--                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>-->
            <!--                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>-->
            <!--                </svg>-->
            <!--                <div-->
            <!--                    class="inline-flex border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 absolute bottom-[calc(100%-10px)] left-[calc(100%-12px)] h-4 w-4 items-center justify-center rounded-full p-0 text-[8px] font-semibold">-->
            <!--                    3-->
            <!--                </div>-->
            <!--            </button>-->

            <!--            notification-->
<!--            <button-->
<!--                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 underline-offset-4 hover:underline h-9 rounded-md px-3 relative text-foreground"-->
<!--                type="button" id="radix-:R4d7rqba:" aria-haspopup="menu" aria-expanded="false"-->
<!--                data-state="closed">-->
<!--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"-->
<!--                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
<!--                     stroke-linejoin="round" class="lucide lucide-bell h-5 w-5">-->
<!--                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>-->
<!--                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>-->
<!--                </svg>-->
<!--                <div-->
<!--                    class="inline-flex border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 absolute bottom-[calc(100%-10px)] left-[calc(100%-12px)] h-4 w-4 items-center justify-center rounded-full p-0 text-[8px] font-semibold">-->
<!--                    2-->
<!--                </div>-->
<!--            </button>-->


            <div class="ms-4">
                <span class="relative flex shrink-0 overflow-hidden size-8 rounded-full" type="button"
                      @click="toggleProfileDropdown"
                      id="radix-:R6d7rqba:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
                   <img class="aspect-square h-full w-full" :alt="`photo profile de  ${state.user.name}`"
                        :src="state.user.profile" v-if="state.user.profile">

                    <div v-else class="aspect-square h-full w-full bg-primary text-white">
                        <span class="font-bold flex items-center justify-center h-full w-full capitalize">{{
                                state.user?.name?.charAt(0)
                            }}</span>
                    </div>
                </span>

                <profile-dropdown :show-profile-dropdown="showProfileDown" :user="state.user">
                    <slot name="profile-dropdown"/>
                </profile-dropdown>

            </div>
        </header>
    </div>
</template>

<style scoped>

</style>
