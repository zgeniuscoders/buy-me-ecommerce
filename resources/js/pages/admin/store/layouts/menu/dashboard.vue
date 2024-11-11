<script setup lang="ts">

</script>

<template>
    <div data-sidebar="group" class="relative flex w-full min-w-0 flex-col p-2">
        <div data-sidebar="group-label"
             class="text-sidebar-foreground/70 ring-sidebar-ring flex h-8 shrink-0 items-center rounded-md px-2 text-xs font-medium outline-none transition-[margin,opa] duration-200 ease-linear focus-visible:ring-2 [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 group-data-[collapsible=icon]:-mt-8 group-data-[collapsible=icon]:opacity-0">
            Dashboards
        </div>
        <div data-sidebar="group-content" class="w-full text-sm">
            <ul data-sidebar="menu" class="flex w-full min-w-0 flex-col gap-1">
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="true"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/default">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-pie-chart size-4">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span>Default</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/ecommerce">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-shopping-bag size-4">
                            <path
                                d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path>
                            <path d="M3 6h18"></path>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span>E-commerce</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/crm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-bar-chart size-4">
                            <line x1="12" x2="12" y1="20" y2="10"></line>
                            <line x1="18" x2="18" y1="20" y2="4"></line>
                            <line x1="6" x2="6" y1="20" y2="16"></line>
                        </svg>
                        <span>CRM</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/website-analytics">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-gauge size-4">
                            <path d="m12 14 4-4"></path>
                            <path d="M3.34 19a10 10 0 1 1 17.32 0"></path>
                        </svg>
                        <span>Website Analytics</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/project-management">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-folder-dot size-4">
                            <path
                                d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"></path>
                            <circle cx="12" cy="13" r="1"></circle>
                        </svg>
                        <span>Project Management</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/cyripto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-wallet-minimal size-4">
                            <path d="M17 14h.01"></path>
                            <path
                                d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14"></path>
                        </svg>
                        <span>Cyripto</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/academy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-graduation-cap size-4">
                            <path
                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path>
                            <path d="M22 10v6"></path>
                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                        </svg>
                        <span>Academy</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/hospital">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-activity size-4">
                            <path
                                d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path>
                        </svg>
                        <span>Hospital</span></a>
                    <div data-sidebar="menu-badge"
                         class="text-sidebar-foreground pointer-events-none absolute right-1 flex h-5 min-w-5 select-none items-center justify-center rounded-md px-1 text-xs font-medium tabular-nums peer-data-[active=true]/menu-button:text-sidebar-accent-foreground peer-data-[size=sm]/menu-button:top-1 peer-data-[size=default]/menu-button:top-1.5 peer-data-[size=lg]/menu-button:top-2.5 group-data-[collapsible=icon]:hidden opacity-50">
                        Coming
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped>

</style>
