import './bootstrap';
import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/vue3'
import Toaster from "@meforma/vue-toaster";


import addToCartComponent from "./components/cart/addToCartButton.vue"
import cartCountIndicator from "./components/cart/cartCountIndicator.vue"
import cart from "./components/cart/cart.vue"


createApp()
    .use(Toaster)
    .component('cart-counter', cartCountIndicator)
    .component('add-to-cart-button', addToCartComponent)
    .component("cart",cart)
    .mount("#app-client")

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./pages/**/*.vue', {eager: true})
        return pages[`./pages/${name}.vue`]
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(Toaster)
            .mount(el)
    },
})
