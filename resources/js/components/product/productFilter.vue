<template>
    <section className="px-0">
        <form action="" method="get">
            <div className="container px-4 md:px-6 grid md:grid-cols-[240px_1fr] gap-10 items-start">
                <div className="flex flex-col gap-4 items-start py-2">
                    <div className="flex flex-col gap-2 w-full">
                        <Label for="search" class="sr-only">
                            Recherche
                        </Label>
                        <Input id="search" placeholder="Recherche" name="q" class="w-full"/>
                    </div>
                    <div className="grid gap-2">
                        <h2 className="text-lg font-semibold tracking-wide">Category</h2>
                        <div className="grid gap-2">
                            <template v-for="category in categories" :key="category.id">
                                <Label htmlFor="category-shoes" className="flex items-center gap-2 font-normal">
                                    <Checkbox id="{{ category.id }}" name="categories[]" :value="category.name"/> {{ category.name }}
                                </Label>
                            </template>
                        </div>
                    </div>
                    <div className="grid gap-2">
                        <h2 className="text-lg font-semibold tracking-wide">Gender</h2>
                        <div className="grid gap-2">
                            <Label htmlFor="gender-male" className="flex items-center gap-2 font-normal">
                                <Checkbox id="gender-male" /> Male
                            </Label>
                            <Label htmlFor="gender-female" className="flex items-center gap-2 font-normal">
                                <Checkbox id="gender-female" /> Female
                            </Label>
                            <Label htmlFor="gender-unisex" className="flex items-center gap-2 font-normal">
                                <Checkbox id="gender-unisex" /> Unisex
                            </Label>
                        </div>
                    </div>
                    <div className="grid gap-2">
                        <h2 className="text-lg font-semibold tracking-wide">Kids</h2>
                        <div className="grid gap-2">
                            <Label htmlFor="kids-boy" className="flex items-center gap-2 font-normal">
                                <Checkbox id="kids-boy" /> Boy
                            </Label>
                            <Label htmlFor="kids-girl" className="flex items-center gap-2 font-normal">
                                <Checkbox id="kids-girl" /> Girl
                            </Label>
                        </div>
                    </div>

                    <div className="grid gap-2">
                        <h2 className="text-lg font-semibold tracking-wide">Price Range</h2>
                        <div />
                    </div>

                    <div className="grid gap-2">
                        <h2 className="text-lg font-semibold tracking-wide">Size</h2>
                        <div className="grid gap-2">
                            <Label htmlFor="size-xs" className="flex items-center gap-2 font-normal">
                                <Checkbox id="size-xs" /> XS
                            </Label>
                            <Label htmlFor="size-s" className="flex items-center gap-2 font-normal">
                                <Checkbox id="size-s" /> S
                            </Label>
                            <Label htmlFor="size-m" className="flex items-center gap-2 font-normal">
                                <Checkbox id="size-m" /> M
                            </Label>
                            <Label htmlFor="size-l" className="flex items-center gap-2 font-normal">
                                <Checkbox id="size-l" /> L
                            </Label>
                            <Label htmlFor="size-xl" className="flex items-center gap-2 font-normal">
                                <Checkbox id="size-xl" /> XL
                            </Label>
                        </div>
                    </div>
                    <div class="w-full">
                        <Button class="w-full">Filtrer</Button>
                    </div>
                </div>
                <div className="grid gap-6 md:gap-8">
                    <div className="grid sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-3 gap-8">
                        <template v-for="product in products" :key="product.id">
                            <div className="relative group">
                                <a :href="`/articles/${product.id}`" className="absolute inset-0 z-10" prefetch={false}>
                                    <span className="sr-only">View</span>
                                </a>
                                <img :src="product.image" alt="Cover image" width={200} height={200}
                                    className="rounded-lg object-contain w-full aspect-square group-hover:opacity-50 transition-opacity" />
                                <div className="flex-1 py-4">
                                    <h3 className="font-semibold tracking-tight">{{ product.name }}</h3>
                                    <small className="text-sm leading-none text-gray-500 dark:text-gray-400">{{
                                        product.category.name }}</small>
                                    <h4 className="font-semibold">{{ product.price }}$</h4>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </form>

    </section>
</template>


<script setup lang="ts">

import { Label } from "@/components/ui/label"
import { Checkbox } from "@/components/ui/checkbox"
import { Input } from "@/components/ui/input"
import { Category, ProductType } from "@/models/ProductType";
import { Button } from "../ui/button";

const { products } = defineProps<{
    categories: Category[],
    products: ProductType[]
}>()

</script>
