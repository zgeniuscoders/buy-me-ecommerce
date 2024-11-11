<script setup lang="ts">

</script>

<template>
    <div data-sidebar="group" class="relative flex w-full min-w-0 flex-col p-2">
        <div data-sidebar="group-label"
             class="text-sidebar-foreground/70 ring-sidebar-ring flex h-8 shrink-0 items-center rounded-md px-2 text-xs font-medium outline-none transition-[margin,opa] duration-200 ease-linear focus-visible:ring-2 [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 group-data-[collapsible=icon]:-mt-8 group-data-[collapsible=icon]:opacity-0">
            Pages
        </div>
        <div data-sidebar="group-content" class="w-full text-sm">
            <ul data-sidebar="menu" class="flex w-full min-w-0 flex-col gap-1">
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-proportions size-4">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="M12 9v11"></path>
                            <path d="M2 9h13a2 2 0 0 1 2 2v9"></path>
                        </svg>
                        <span>Landing Page</span></a>
                    <div data-sidebar="menu-badge"
                         class="text-sidebar-foreground pointer-events-none absolute right-1 flex h-5 min-w-5 select-none items-center justify-center rounded-md px-1 text-xs font-medium tabular-nums peer-data-[active=true]/menu-button:text-sidebar-accent-foreground peer-data-[size=sm]/menu-button:top-1 peer-data-[size=default]/menu-button:top-1.5 peer-data-[size=lg]/menu-button:top-2.5 group-data-[collapsible=icon]:hidden opacity-50">
                        Coming
                    </div>
                </li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/pages/profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-contact-round size-4">
                            <path d="M16 18a4 4 0 0 0-8 0"></path>
                            <circle cx="12" cy="11" r="3"></circle>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <line x1="8" x2="8" y1="2" y2="4"></line>
                            <line x1="16" x2="16" y1="2" y2="4"></line>
                        </svg>
                        <span>Profile</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <a target=""
                       data-sidebar="menu-button"
                       data-size="default"
                       data-active="false"
                       class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                       data-state="closed"
                       href="/dashboard/pages/users">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-users size-4">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>Users</span></a></li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <div data-state="closed" class="group/collapsible">
                        <button data-sidebar="menu-button" data-size="default"
                                data-active="false"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                                type="button" aria-controls="radix-:R1976j7rqba:"
                                aria-expanded="false" data-state="closed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-settings size-4">
                                <path
                                    d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span>Settings</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-chevron-right ml-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                        <div data-state="closed" id="radix-:R1976j7rqba:" hidden=""
                             style=""></div>
                    </div>
                </li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <div data-state="closed" class="group/collapsible">
                        <button data-sidebar="menu-button" data-size="default"
                                data-active="false"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                                type="button" aria-controls="radix-:R1b76j7rqba:"
                                aria-expanded="false" data-state="closed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-package-search size-4">
                                <path
                                    d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path>
                                <path d="m7.5 4.27 9 5.15"></path>
                                <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                <line x1="12" x2="12" y1="22" y2="12"></line>
                                <circle cx="18.5" cy="15.5" r="2.5"></circle>
                                <path d="M20.27 17.27 22 19"></path>
                            </svg>
                            <span>Orders</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-chevron-right ml-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                        <div data-state="closed" id="radix-:R1b76j7rqba:" hidden=""
                             style=""></div>
                    </div>
                </li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <div data-state="closed" class="group/collapsible">
                        <button data-sidebar="menu-button" data-size="default"
                                data-active="false"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                                type="button" aria-controls="radix-:R1d76j7rqba:"
                                aria-expanded="false" data-state="closed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-package-search size-4">
                                <path
                                    d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path>
                                <path d="m7.5 4.27 9 5.15"></path>
                                <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                <line x1="12" x2="12" y1="22" y2="12"></line>
                                <circle cx="18.5" cy="15.5" r="2.5"></circle>
                                <path d="M20.27 17.27 22 19"></path>
                            </svg>
                            <span>Products</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-chevron-right ml-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                        <div data-state="closed" id="radix-:R1d76j7rqba:" hidden=""
                             style=""></div>
                    </div>
                </li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <div data-state="closed" class="group/collapsible">
                        <button data-sidebar="menu-button" data-size="default"
                                data-active="false"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                                type="button" aria-controls="radix-:R1f76j7rqba:"
                                aria-expanded="false" data-state="closed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-badge-dollar-sign size-4">
                                <path
                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path>
                                <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
                                <path d="M12 18V6"></path>
                            </svg>
                            <span>Pricing</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-chevron-right ml-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                        <div data-state="closed" id="radix-:R1f76j7rqba:" hidden=""
                             style=""></div>
                    </div>
                </li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <div data-state="closed" class="group/collapsible">
                        <button data-sidebar="menu-button" data-size="default"
                                data-active="false"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                                type="button" aria-controls="radix-:R1h76j7rqba:"
                                aria-expanded="false" data-state="closed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-fingerprint size-4">
                                <path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4"></path>
                                <path d="M14 13.12c0 2.38 0 6.38-1 8.88"></path>
                                <path d="M17.29 21.02c.12-.6.43-2.3.5-3.02"></path>
                                <path d="M2 12a10 10 0 0 1 18-6"></path>
                                <path d="M2 16h.01"></path>
                                <path d="M21.8 16c.2-2 .131-5.354 0-6"></path>
                                <path d="M5 19.5C5.5 18 6 15 6 12a6 6 0 0 1 .34-2"></path>
                                <path d="M8.65 22c.21-.66.45-1.32.57-2"></path>
                                <path d="M9 6.8a6 6 0 0 1 9 5.2v2"></path>
                            </svg>
                            <span>Authentication</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-chevron-right ml-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                        <div data-state="closed" id="radix-:R1h76j7rqba:" hidden=""
                             style=""></div>
                    </div>
                </li>
                <li data-sidebar="menu-item" class="group/menu-item relative">
                    <div data-state="closed" class="group/collapsible">
                        <button data-sidebar="menu-button" data-size="default"
                                data-active="false"
                                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left outline-none ring-sidebar-ring transition-[width,height,padding] focus-visible:ring-2 active:bg-sidebar-accent-hover active:text-sidebar-accent-foreground-hover disabled:pointer-events-none disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-disabled:pointer-events-none aria-disabled:opacity-50 data-[active=true]:bg-sidebar-accent data-[active=true]:font-medium data-[active=true]:text-sidebar-accent-foreground data-[state=open]:hover:bg-sidebar-accent-hover data-[state=open]:hover:text-sidebar-accent-foreground-hover group-data-[collapsible=icon]:!size-8 group-data-[collapsible=icon]:!p-2 [&amp;>span:last-child]:truncate [&amp;>svg]:size-4 [&amp;>svg]:shrink-0 hover:bg-sidebar-accent-hover hover:text-sidebar-accent-foreground-hover h-8 text-sm"
                                type="button" aria-controls="radix-:R1j76j7rqba:"
                                aria-expanded="false" data-state="closed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-fingerprint size-4">
                                <path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4"></path>
                                <path d="M14 13.12c0 2.38 0 6.38-1 8.88"></path>
                                <path d="M17.29 21.02c.12-.6.43-2.3.5-3.02"></path>
                                <path d="M2 12a10 10 0 0 1 18-6"></path>
                                <path d="M2 16h.01"></path>
                                <path d="M21.8 16c.2-2 .131-5.354 0-6"></path>
                                <path d="M5 19.5C5.5 18 6 15 6 12a6 6 0 0 1 .34-2"></path>
                                <path d="M8.65 22c.21-.66.45-1.32.57-2"></path>
                                <path d="M9 6.8a6 6 0 0 1 9 5.2v2"></path>
                            </svg>
                            <span>Error Pages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-chevron-right ml-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-90">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </button>
                        <div data-state="closed" id="radix-:R1j76j7rqba:" hidden=""
                             style=""></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped>

</style>
