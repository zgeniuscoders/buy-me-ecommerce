<template>
    <Layout>
        <section class="p-4">

            <h3 class="text-2xl mb-4 mt-2 font-medium">Products</h3>
            <div class="grid lg:grid-cols-3 lg:gap-6">
                <article class="p-4 shadow-md bg-white rounded-md">
                    <div class="flex items-center">

                        <div
                            class="bg-emerald-400 p-2 rounded-md flex items-center justify-center h-[50px] w-[50px] mr-4">
                            <svg class="mx-auto mb-1 text-white w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <div>
                            <h4>Total sales</h4>
                            <h3 class="text-2xl font-medium">$24,000</h3>
                        </div>

                    </div>
                    <hr class="border-t w-full mt-4">
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-400 text-sm">VS Previous Day</span>
                        <h4 class="text-emerald-600 text-sm">2,67</h4>
                    </div>

                </article>

                <article class="p-4 shadow-md bg-white rounded-md">
                    <div class="flex items-center">

                        <div
                            class="bg-indigo-400 p-2 rounded-md flex items-center justify-center h-[50px] w-[50px] mr-4">
                            <svg class="mx-auto mb-1 text-white w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <div>
                            <h4>Total orders</h4>
                            <h3 class="text-2xl font-medium">$24,000</h3>
                        </div>

                    </div>
                    <hr class="border-t w-full mt-4">
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-400 text-sm">VS Previous Day</span>
                        <h4 class="text-emerald-600 text-sm">2,67</h4>
                    </div>

                </article>

                <article class="p-4 shadow-md bg-white rounded-md">
                    <div class="flex items-center">

                        <div class="bg-pink-400 p-2 rounded-md flex items-center justify-center h-[50px] w-[50px] mr-4">
                            <svg class="mx-auto mb-1 text-white w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <div>
                            <h4>Total products</h4>
                            <h3 class="text-2xl font-medium">156,00</h3>
                        </div>

                    </div>
                    <hr class="border-t w-full mt-4">
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-400 text-sm">VS Previous Day</span>
                        <h4 class="text-emerald-600 text-sm">2,67</h4>
                    </div>

                </article>
            </div>

        </section>

        <section class="p-4">

            <form action="">
                <div class="grid lg:grid-cols-product gap-2">
                    <div>

                        <!--                        general information-->
                        <card>
                            <h2 class="text-xl font-medium">General Information</h2>


                            <input-component name="name" title="Product name" placeholder="T-Shirt" v-model="form.name"
                                inputType="text" :error="form.errors.name" />

                            <input-component name="description" title="Product description" placeholder=""
                                v-model="form.description" inputType="textarea" :error="form.errors.description" />
                        </card>

                        <!--                        media -->
                        <card class="mt-4">
                            <h2>Product Media</h2>
                            <div class="border-b py-4">

                                <div class="grid lg:grid-cols-6 gap-2">

                                    <template v-for="image in form.images" :key="image">
                                        <div class="bg-red-100 h[80px] rounded-md">

                                            <img :src="image.name">
                                        </div>
                                    </template>


                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 h-[80px]">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500"
                                                aria-hidden="true" viewBox="0 -960 960 960" fill="#5f6368">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                            </svg>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" @input="files($event)"
                                            accept="image/jpeg,image/png" />
                                    </label>


                                </div>

                                <input-component name="image" title="Product image" placeholder="T-Shirt"
                                    @input="form.image = $event.target.files[0]" inputType="file"
                                    :error="form.errors.image" accept="image/jpeg,image/png" />

                            </div>
                        </card>

                        <!--                        inventory-->
                        <card class="mt-4">
                            <h2>Inventory</h2>
                            <div class="border-b py-4">
                                <div class="grid lg:grid-cols-2 gap-2">
                                    <input-component name="barcode" title="Barcode" placeholder="3782084972"
                                        v-model="form.barcode" inputType="text" :error="form.errors.barcode" />
                                    <input-component name="qty" title="Qty" placeholder="2" v-model="form.qty"
                                        inputType="number" :error="form.errors.qty" />
                                </div>
                            </div>
                        </card>
                    </div>

                    <div>

                        <!--                        status & category-->
                        <card>
                            <h3 class="font-medium mb-4">Status</h3>
                            <select-component id="status" name="status" title="status" :options="$page.props.status"
                                v-model="form.status" :error="form.errors.status" :id-key="true" />

                            <h3 class="my-4 font-medium">Product Organization</h3>
                            <select-component id="category_id" name="category_id" title="category"
                                :options="$page.props.categories" v-model="form.category_id"
                                :error="form.errors.category_id" :id-key="true" />

                        </card>

                        <!--                        pricing & discount-->
                        <card class="mt-4">
                            <h3 class="font-medium mb-4">Pricing</h3>
                            <input-component name="price" title="Product price" placeholder="100" v-model="form.price"
                                inputType="number" :error="form.errors.price" />

                            <input-component name="discount" title="Discount Percentage" placeholder="10"
                                v-model="form.discount" inputType="number" :error="form.errors.discount" />
                        </card>

                        <!--                        btn submit-->
                        <card class="mt-4">
                            <div class="flex items-end justify-end">
                                <button type="submit" @click.prevent="submit"
                                    class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
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
import { useForm } from "@inertiajs/vue3";
import SelectComponent from "../../../../components/select-component.vue";
import { ref } from "vue";
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
    form.post('/ma-boutique/articles', {
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

<style scoped></style>
