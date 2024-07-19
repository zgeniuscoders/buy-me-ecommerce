<template>
    <Layout>

        <section class="p-4">
            <div class="bg-white shadow p-4 rounded-md my-2">
                <h1 class="font-medium text-2xl">Editing Product</h1>
            </div>
            <form action="">
                <div class="grid lg:grid-cols-product gap-2">
                    <div>

                        <!--                        general information-->
                        <card>
                            <h2 class="text-xl font-medium">General Information</h2>


                            <input-component name="name" title="Product name" placeholder="T-Shirt" v-model="form.name"
                                             type="text" :error="form.errors.name" :value="$page.props.product.name"/>

                            <input-component name="description" title="Product description" placeholder=""
                                             v-model="form.description" type="textarea"
                                             :error="form.errors.description"/>
                        </card>

                        <!--                        media -->
                        <card class="mt-4">
                            <h2>Product Media</h2>
                            <div class="border-b py-4">

                                <div class="grid lg:grid-cols-6 gap-2">

                                    <template v-for="image in $page.props.product.images" :key="image">
                                        <div class="bg-red-100 h-[80px] rounded-md overflow-hidden">
                                            <img :src="`/storage/${image}`" class="object-cover">
                                        </div>
                                    </template>


                                    <label for="dropzone-file"
                                           class="flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 h-[80px]">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500"
                                                 aria-hidden="true"
                                                 viewBox="0 -960 960 960" fill="#5f6368">
                                                <path
                                                    stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                                            </svg>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden"
                                               @input="files($event)" accept="image/jpeg,image/png"/>
                                    </label>


                                </div>

                                <input-component name="image" title="Product image" placeholder="T-Shirt"
                                                 @input="form.image = $event.target.files[0]"
                                                 type="file" :error="form.errors.image" accept="image/jpeg,image/png"/>

                            </div>
                        </card>

                        <!--                        inventory-->
                        <card class="mt-4">
                            <h2>Inventory</h2>
                            <div class="border-b py-4">
                                <div class="grid lg:grid-cols-2 gap-2">
                                    <input-component name="barcode" title="Barcode" placeholder="3782084972"
                                                     v-model="form.barcode" type="text" :error="form.errors.barcode"/>
                                    <input-component name="qty" title="Qty" placeholder="2" v-model="form.qty"
                                                     type="number" :error="form.errors.qty"/>
                                </div>
                            </div>
                        </card>
                    </div>

                    <div>

                        <!--                        status & category-->
                        <card>
                            <h3 class="font-medium mb-4">Status</h3>
                            <select-component id="status" name="status" title="status" :options="$page.props.status"
                                              v-model="form.status" :error="form.errors.status"/>

                            <h3 class="my-4 font-medium">Product Organization</h3>
                            <select-component id="category_id" name="category_id" title="category" :options="$page.props.categories"
                                              v-model="form.category_id" :error="form.errors.category_id"/>

                        </card>

                        <!--                        pricing & discount-->
                        <card class="mt-4">
                            <h3 class="font-medium mb-4">Pricing</h3>
                            <input-component name="price" title="Product price" placeholder="100" v-model="form.price"
                                             type="number" :error="form.errors.price"/>

                            <input-component name="discount" title="Discount Percentage" placeholder="10"
                                             v-model="form.discount" type="number" :error="form.errors.discount"/>
                        </card>

                        <!--                        btn submit-->
                        <card class="mt-4">
                            <div class="flex items-end justify-end">
                                <button type="submit" @click.prevent="submit"
                                        class="bg-blue-800 text-white p-2 rounded-md hover:bg-blue-900 transition-all">
                                    Add Product
                                </button>
                            </div>
                        </card>
                    </div>
                </div>
            </form>

        </section>

    </Layout>
</template>

<script setup>

import Layout from "../../layouts/layout.vue";
import InputComponent from "../../../../components/input-component.vue";
import {useForm} from "@inertiajs/vue3";
import SelectComponent from "../../../../components/select-component.vue";
import {onMounted, ref} from "vue";
import Card from "../../../../components/card.vue";
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster();

const files = (event) => {
    form.data().images.push(event.target.files[0])
    console.log(form.data().images)
}

const form = useForm({
    name: null,
    description: null,
    price: null,
    image: null,
    images: [],
    category_id: null,
    qty: null,
    status: null,
    barcode: null,
    discount: null,
})

const submit = () => {
    form.post('/products', {
            onError: () => {
                toaster.error('An error occurred while adding the product')
            },
            onSuccess: () => {
                form.reset()
                toaster.success('Product Added Successfully')
            }
        }
    )
}


</script>

<style scoped>

</style>
