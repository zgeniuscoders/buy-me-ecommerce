import './bootstrap';

import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/vue3'
import Toaster from "@meforma/vue-toaster";

import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import type {DefineComponent} from "vue";

import addToCartComponent from "./components/cart/addToCartButton.vue"
import cartCountIndicator from "./components/cart/cartCountIndicator.vue"
import clearCartButton from './components/cart/clearCartButton.vue';
import productDetail from './components/product/productDetail.vue';
import categoryDropdown from './components/category/categoryDropdown.vue'

import { createPinia } from 'pinia';


createApp()
    .use(Toaster)
    .use(createPinia())
    .component('cart-counter', cartCountIndicator)
    .component('add-to-cart-button', addToCartComponent)
    .component("clearCartButton", clearCartButton)
    .component("product-detail", productDetail)
    .component("category-dropdown", categoryDropdown)
    .mount("#app-client")

    createInertiaApp({
        resolve: (name) => resolvePageComponent(
            `./pages/${name}.vue`,
            import.meta.glob<DefineComponent>("./pages/**/*.vue")
        ),
        setup({el, App, props, plugin}) {
            createApp({render: () => h(App, props)})
                .use(plugin)
                .use(createPinia())
                .use(Toaster)
                .mount(el)
        },
    })
