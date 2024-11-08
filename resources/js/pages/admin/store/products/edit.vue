<script setup>

import Layout from "../../layouts/layout.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import { createToaster } from "@meforma/vue-toaster";

import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import { Textarea } from "@/components/ui/textarea";
import { Checkbox } from "@/components/ui/checkbox"

import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"

import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectTrigger,
} from "@/components/ui/select"


const toaster = createToaster();
const { product, categories, status } = usePage().props

const files = (event) => {
    form.data().images.push(event.target.files[0])
    console.log(form.data().images)
}

const form = useForm({
    name: null,
    description: null,
    price: null,
    category_id: null,
    qty: null,
    status: null,
    barcode: null,
    discount: null,
})

const updateProduct = () => {
    form.put(`/ma-boutique/articles/${product.id}`, {
        onError: () => {
            toaster.error('An error occurred while adding the product')
        },
        onSuccess: () => {
            form.reset()
            toaster.success('Product updated Successfully')
        }
    }
    )
}

onMounted(() => {
    form.name = product.name
    form.description = product.description
    form.qty = product.qty
    form.status = product.status
    form.price = product.price
    form.discount = product.discount
    form.has_delivered = product.has_delivered
    form.category_id = product.category_id
})


</script>

<template>
    <Layout>

        <section class="p-4 space-y-2">
            <card>
                <CardHeader>
                    <CardTitle>Editing Product</CardTitle>
                </CardHeader>
            </card>

            <form action="">
                <div class="grid lg:grid-cols-product gap-2">
                    <div class="space-y-2">

                        <!--                        general information-->
                        <card>

                            <CardHeader>
                                <CardTitle>Information generale de l'article</CardTitle>
                            </CardHeader>
                            <CardContent>
                                <div class="space-y-2">
                                    <Label for="name">Nom de l'article</Label>
                                    <Input placeholder="Nom de l'article" v-model="form.name" id="name" />
                                    <span v-if="form.errors.name" class="text-red-400 text-sm">{{
                                        form.errors.name
                                        }}</span>
                                </div>

                                <div class="space-y-2">
                                    <Label for="description">Description de l'article</Label>
                                    <Textarea placeholder="description" v-model="form.description" id="name"></Textarea>
                                    <span v-if="form.errors.description" class="text-red-400 text-sm">{{
                                        form.errors.description
                                        }}</span>
                                </div>
                            </CardContent>

                        </card>

                        <!--                        inventory-->
                        <card>
                            <CardHeader>
                                <CardTitle>
                                    Inventory
                                </CardTitle>
                            </CardHeader>
                            <CardContent>

                                <Label for="qty">Quantite en stock</Label>
                                <Input name="qty" v-model="form.qty" placeholder="2" />
                                <span v-if="form.errors.qty" class="text-red-400 text-sm" pla>{{
                                    form.errors.qty
                                    }}</span>


                            </CardContent>
                        </card>
                    </div>

                    <div class="space-y-2">
                        <!--                        status & category-->
                        <card>

                            <CardHeader>
                                <CardTitle>Status</CardTitle>
                            </CardHeader>


                            <CardContent class="space-y-2">
                                <div class="space-y-2">
                                    <Label for="status">Status</Label>
                                    <Select v-model="form.status" name="status">
                                        <SelectTrigger>
                                            <SelectValue placeholder="Selectioner le status de votre categorie" />
                                        </SelectTrigger>
                                        <SelectContent>
                                            <SelectGroup>
                                                <template v-for="status in status" :key="status.id">
                                                    <SelectItem :value="status.id">{{ status.name }}</SelectItem>
                                                </template>
                                            </SelectGroup>
                                        </SelectContent>
                                    </Select>
                                    <span v-if="form.errors.status" class="text-red-400 text-sm">{{
                                        form.errors.status }}</span>

                                </div>

                                <div class="space-y-2">
                                    <Label for="categorie">Categorie</Label>
                                    <Select v-model="form.category_id">
                                        <SelectTrigger>
                                            <SelectValue placeholder="Selectioner une categorie" />
                                        </SelectTrigger>
                                        <SelectContent>
                                            <SelectGroup>
                                                <template v-for="category in categories" :key="category.id">
                                                    <SelectItem :value="category.id">{{ category.name }}</SelectItem>
                                                </template>
                                            </SelectGroup>
                                        </SelectContent>
                                    </Select>
                                    <span v-if="form.errors.category_id" class="text-red-400 text-sm">{{
                                        from.errors.category_id }}</span>

                                </div>
                            </CardContent>


                        </card>

                        <!--                        pricing & discount-->
                        <card>
                            <CardHeader>
                                <CardTitle>Prix</CardTitle>
                            </CardHeader>

                            <CardContent>
                                <div class="space-y-2">
                                    <Label for="price">Prix de l'article</Label>
                                    <Input placeholder="200" v-model="form.price" id="price" type="number" />
                                    <span v-if="form.errors.price" class="text-red-400 text-sm">{{
                                        form.errors.price
                                        }}</span>
                                </div>
                                <div class="space-y-2">
                                    <Label for="discount">discount</Label>
                                    <Input placeholder="200" v-model="form.discount" id="discount" type="number" />
                                    <span v-if="form.errors.discount" class="text-red-400 text-sm">{{
                                        form.errors.discount
                                        }}</span>
                                </div>
                            </CardContent>

                        </card>

                        <card>
                            <CardHeader>
                                <CardTitle>Mode de livraison</CardTitle>
                            </CardHeader>
                            <CardContent>
                                <div className="flex items-center space-x-2">
                                    <Checkbox id="has_delivered" v-model="form.has_delivered" />
                                    <label for="has_delivered"
                                        className="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                        Livraison a domicile
                                    </label>
                                    <div class="text-red-500" v-if="form.errors.has_delivered">{{
                                        form.errors.has_delivered
                                        }}</div>
                                </div>
                            </CardContent>

                        </card>

                        <!--                        btn submit-->
                        <card>
                            <CardContent></CardContent>
                            <CardFooter class="w-full">

                                <button type="submit" @click.prevent="updateProduct"
                                    class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                                    Modifier l'article
                                </button>

                            </CardFooter>
                        </card>
                    </div>
                </div>
            </form>

        </section>

    </Layout>
</template>


<style scoped></style>
