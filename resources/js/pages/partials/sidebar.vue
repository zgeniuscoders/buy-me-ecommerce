<script setup lang="ts">

</script>

<template>
    <div class="text-sidebar-foreground group peer hidden md:block" data-state="expanded" data-collapsible=""
         data-variant="sidebar" data-side="left">
        <div
            class="relative h-svh w-[--sidebar-width] bg-transparent transition-[width] duration-200 ease-linear group-data-[collapsible=offcanvas]:w-0 group-data-[side=right]:rotate-180 group-data-[collapsible=icon]:w-[--sidebar-width-icon]"></div>
        <div
            class="fixed inset-y-0 z-10 hidden h-svh w-[--sidebar-width] transition-[left,right,width] duration-200 ease-linear md:flex left-0 group-data-[collapsible=offcanvas]:left-[calc(var(--sidebar-width)*-1)] group-data-[collapsible=icon]:w-[--sidebar-width-icon] group-data-[side=left]:border-r group-data-[side=right]:border-l">
            <div data-sidebar="sidebar"
                 class="bg-sidebar group-data-[variant=floating]:border-sidebar-border flex h-full w-full flex-col group-data-[variant=floating]:rounded-lg group-data-[variant=floating]:border group-data-[variant=floating]:shadow">
                <div data-sidebar="header" class="flex flex-col gap-2 p-2 h-16 items-center justify-center">
                    <ul data-sidebar="menu" class="flex w-full min-w-0 flex-col gap-1">
                        <li data-sidebar="menu-item" class="group/menu-item relative">
                            <button data-sidebar="menu-button" data-size="default" data-active="false"
                                    class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                                    type="button" id="radix-:R1j7rqba:" aria-haspopup="menu" aria-expanded="false"
                                    data-state="closed">
<!--                                <a class="me-2 group-data-[collapsible=icon]:me-0"-->
<!--                                   href="">-->
<!--                                    <img-->
<!--                                        src="" class="hidden w-6 dark:block" alt="shadcn ui kit light logo">-->
<!--                                    <img-->
<!--                                        src="" class="block w-6 dark:hidden" alt="shadcn ui kit logo">-->
<!--                                </a>-->
                                <div class="truncate font-semibold group-data-[collapsible=icon]:hidden">Matrixt</div>
                            </button>
                        </li>
                    </ul>
                </div>
                <div data-sidebar="content"
                     class="flex min-h-0 flex-1 flex-col gap-2 group-data-[collapsible=icon]:overflow-hidden overflow-hidden">
                    <div dir="ltr" class="relative overflow-hidden"
                         style="position:relative;--radix-scroll-area-corner-width:0px;--radix-scroll-area-corner-height:0px">

                        <div data-radix-scroll-area-viewport="" class="h-full w-full rounded-[inherit]"
                             style="overflow: hidden scroll;">
                            <div data-radix-scroll-area-content="">
                                <slot name="dashboard"/>
                                <slot name="apps"/>
                                <slot name="pages"/>
                                <slot name="others"/>
                            </div>
                        </div>
                    </div>
                </div>
                <slot name="upgrade-to-pro"/>
            </div>
        </div>
    </div>
</template>

<style scoped>
[data-radix-scroll-area-viewport] {
    scrollbar-width: none;
    -ms-overflow-style: none;
    -webkit-overflow-scrolling: touch;
}

[data-radix-scroll-area-viewport]::-webkit-scrollbar {
    display: none;
}

:where([data-radix-scroll-area-viewport]) {
    display: flex;
    flex-direction: column;
    align-items: stretch;
}

:where([data-radix-scroll-area-content]) {
    flex-grow: 1;
}
</style>
