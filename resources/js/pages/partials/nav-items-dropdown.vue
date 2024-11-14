<script setup lang="ts">
import {ref} from "vue";

let {isShowing} = defineProps<{
    isShowing: boolean,
    navTitle: string
}>()

const show = ref(false)
show.value = isShowing
const toggleMenu = () => {
    show.value = !show.value
}

</script>

<template>
    <li data-sidebar="menu-item" class="group/menu-item relative">
        <div data-state="closed" class="group/collapsible">
            <button data-sidebar="menu-button" data-size="default" @click="toggleMenu"
                    data-active="false"
                    class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                    type="button" aria-controls="radix-:R1976j7rqba:"
                    aria-expanded="false" data-state="closed">
                <slot name="svg"/>
                <span>{{navTitle}}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round"
                     class="lucide lucide-chevron-right ml-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
            <div :data-state="show ? 'open' : 'close'" id="radix-:R1d76j7rqba:"
                 style="--radix-collapsible-content-height: 90.0234375px; --radix-collapsible-content-width: 224.125px;">
                <ul data-sidebar="menu-sub"
                    :class="show ? 'hidden' : 'flex'"
                    class="border-sidebar-border mx-3.5 flex min-w-0 translate-x-px flex-col gap-1 border-l px-2.5 py-0.5 group-data-[collapsible=icon]:hidden">
                    <slot/>
                </ul>
            </div>
        </div>
    </li>
</template>

<style scoped>

</style>
