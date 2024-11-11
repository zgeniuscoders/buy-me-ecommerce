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
                                    data-state="closed"><a class="me-2 group-data-[collapsible=icon]:me-0" href="/"><img
                                src="" class="hidden w-6 dark:block" alt="shadcn ui kit light logo"><img
                                src="" class="block w-6 dark:hidden" alt="shadcn ui kit logo"></a>
                                <div class="truncate font-semibold group-data-[collapsible=icon]:hidden">Matrixt</div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="lucide lucide-chevrons-up-down ml-auto group-data-[collapsible=icon]:hidden">
                                    <path d="m7 15 5 5 5-5"></path>
                                    <path d="m7 9 5-5 5 5"></path>
                                </svg>
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
                <div data-sidebar="footer" class="flex flex-col gap-2 p-2">
                    <div
                        class="shadow-base rounded-lg border bg-card text-card-foreground group-data-[collapsible=icon]:hidden">
                        <div class="flex flex-col space-y-1.5 p-4"><h3
                            class="text-lg font-bold leading-none tracking-tight">Upgrade to Pro</h3>
                            <div class="text-sm text-muted-foreground">Get pro now to own all templates, components and
                                pages for life.
                            </div>
                        </div>
                        <div class="p-4 pt-0">
                            <a target="_blank"
                               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 px-4 py-2 w-full"
                               href="https://bundui.lemonsqueezy.com/buy/385ebdb6-6193-4d37-9148-057ab89b9c8d">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-sparkles me-2 size-4">
                                    <path
                                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                    <path d="M20 3v4"></path>
                                    <path d="M22 5h-4"></path>
                                    <path d="M4 17v2"></path>
                                    <path d="M5 18H3"></path>
                                </svg>
                                Upgrade Now
                            </a>
                        </div>
                    </div>
                </div>
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
