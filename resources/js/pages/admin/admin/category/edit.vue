<script setup lang="ts">

import adminLayout from '../../layouts/adminLayout.vue';
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"
import inputComponent from '@/components/input-component.vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { createToaster } from "@meforma/vue-toaster";
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectLabel,
    SelectTrigger,
    SelectValue,
} from "@/components/ui/select"

const toaster = createToaster();

const { category, categories, status } = usePage().props


const categoryForm = useForm({
    category_id: null,
    status: "",
    name: "",
    image: null
})

function readFileData(file) {
    return URL.createObjectURL(file)
}

onMounted(() => {
    categoryForm.name = category.name
    categoryForm.category_id = category.category_id
    categoryForm.status = status

})

const updateCategory = (id: Number) => {
    categoryForm.put("/admin/categories/" + id, {
        onError: (e) => {
            toaster.error("Une erreur se produite lors de la mise a jour du category " + categoryForm.name)
        },
        onSuccess: () => {
            toaster.success(`La category ${categoryForm.name} est ete mis ajour avec success`)
        }
    })
}

</script>

<template>

    <admin-layout>
        <section class="space-y-2 p-2 mt-4">
            <Card>
                <CardHeader>
                    <CardTitle>Modification de la category <strong>{{ category.name }}</strong></CardTitle>
                </CardHeader>
            </Card>
            <form action="" method="post" class="space-y-4">

                <card>

                    <CardHeader>
                        <CardTitle>Information generale de la category</CardTitle>
                    </CardHeader>
                    <CardContent class="space-y-2">
                        <div class="space-y-2">
                            <Label for="name">Nom de la category</Label>
                            <Input placeholder="Nom de la category" v-model="categoryForm.name" id="name" />
                            <span v-if="categoryForm.errors.name" class="text-red-400 text-sm">{{
                                categoryForm.errors.name
                                }}</span>
                        </div>

                        <div class="space-y-2">
                            <Label for="categories">Categories</Label>
                            <Select v-model="categoryForm.category_id" id="categories">
                                <SelectTrigger>
                                    <SelectValue placeholder="Selectioner une categorie" />
                                </SelectTrigger>
                                <SelectContent>
                                    <template v-for="c in categories" :key="c.id">
                                        <SelectItem :value="c.id">{{ c.name }}</SelectItem>
                                    </template>
                                </SelectContent>
                            </Select>
                            <span v-if="categoryForm.errors.category_id" class="text-red-400 text-sm">{{
                                categoryForm.errors.category_id }}</span>

                        </div>

                        <div class="space-y-2">
                            <Label for="status">Status</Label>

                            <Select v-model="categoryForm.status" id="status">
                                <SelectTrigger>
                                    <SelectValue placeholder="Selectioner le status de votre categorie" />
                                </SelectTrigger>
                                <SelectContent>
                                    <template v-for="s in status" :key="s.id">
                                        <SelectItem :value="s.name">{{ s.name }}</SelectItem>
                                    </template>
                                </SelectContent>
                            </Select>
                            <span v-if="categoryForm.errors.status" class="text-red-400 text-sm">{{
                                categoryForm.errors.status }}</span>

                        </div>

                    </CardContent>

                </card>

                <card class="flex items-center gap-2">

                    <template v-if="categoryForm.image">
                        <div class="my-2">
                            <img :src="readFileData(categoryForm.image)"
                                class="h-[100px] w-[150px] object-cover rounded-md"
                                :alt="`image de la category ${category.name}`">
                        </div>
                    </template>

                    <label for="dropzone-file"
                        class="w-full flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 h-[100px]">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" aria-hidden="true"
                                viewBox="0 -960 960 960" fill="#5f6368">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                        </div>

                        <input id="dropzone-file" type="file" class="hidden"
                            @input="categoryForm.image = $event.target.files[0]" accept="image/jpeg,image/png" />

                    </label>

                </card>

                <card>
                    <CardHeader></CardHeader>
                    <CardFooter>
                        <div class="flex items-end justify-end">
                            <button type="submit" @click.prevent="updateCategory(category.id)"
                                class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                                Modifier la category
                            </button>
                        </div>
                    </CardFooter>
                </card>
            </form>

        </section>
    </admin-layout>

</template>