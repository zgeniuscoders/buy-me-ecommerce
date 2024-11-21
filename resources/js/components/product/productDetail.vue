<script setup lang="ts">
import { Badge } from "@/components/ui/badge"
import { Label } from "@/components/ui/label"
import { RadioGroup, RadioGroupItem } from "@/components/ui/radio-group"
import { Select, SelectTrigger, SelectValue, SelectContent, SelectItem } from "@/components/ui/select"
import { Button } from "@/components/ui/button"
import HeartIcon from "./heartIcon.vue"
import StarIcon from "./StarIcon.vue"
import { onMounted } from "vue"
import addToCartButton from "../cart/addToCartButton.vue"

const {product} = defineProps<{
    product: {
        name: string,
        description: string,
        image: string,
        price: number,
        images: object
    }
}>()


onMounted(() => {
    console.log("mounted");

})
</script>

<template>
    <div class="grid gap-6 items-start max-w-6xl px-4 mx-auto py-6">
        <div class="grid gap-6 md:gap-3 items-start order-1">
<!--            <div class="flex md:hidden items-start">-->
<!--                <div class="grid gap-4">-->
<!--                    <h1 class="font-bold text-2xl sm:text-3xl">{{ product.name }}</h1>-->
<!--                    <div class="flex items-center gap-4">-->
<!--                        <div class="flex items-center gap-0.5">-->
<!--                            <StarIcon class="w-5 h-5 fill-primary" />-->
<!--                            <StarIcon class="w-5 h-5 fill-primary" />-->
<!--                            <StarIcon class="w-5 h-5 fill-primary" />-->
<!--                            <StarIcon class="w-5 h-5 fill-muted stroke-muted-foreground" />-->
<!--                            <StarIcon class="w-5 h-5 fill-muted stroke-muted-foreground" />-->
<!--                        </div>-->
<!--                        <Badge>4.0</Badge>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="grid gap-4 text-sm leading-loose md:hidden">
                <p>
                    {{ product.description }}
                </p>
            </div>
            <div class="overflow-auto">
                <div class="flex gap-4 [&_img]:shrink-0 [&_img]:max-w-xs">
                    <img :src="product.image" alt="l'image de l'articles {{ product.name }}"
                        class="aspect-square object-cover border border-gray-200 w-full rounded-lg overflow-hidden dark:border-gray-800"
                        width="600" height="600" />

                    <template v-for="image, index in product.images" :key="index">
                        <img :src="image" alt="l'image de l'articles {{ props.product.name }}-{{ index }} "
                            class="aspect-square object-cover border border-gray-200 w-full rounded-lg overflow-hidden dark:border-gray-800"
                            width="600" height="600" />
                    </template>

                </div>
            </div>
        </div>
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-5 md:gap-10 items-start order-2 md:order-1">
            <div class="hidden md:flex items-start lg:col-span-3">
                <div class="grid gap-4">
                    <h1 class="font-bold text-3xl lg:text-4xl">{{ product.name }}</h1>
<!--                    <div class="flex items-center gap-4">-->
<!--                        <div class="flex items-center gap-0.5">-->
<!--                            <StarIcon class="w-5 h-5 fill-primary" />-->
<!--                            <StarIcon class="w-5 h-5 fill-primary" />-->
<!--                            <StarIcon class="w-5 h-5 fill-primary" />-->
<!--                            <StarIcon class="w-5 h-5 fill-muted stroke-muted-foreground" />-->
<!--                            <StarIcon class="w-5 h-5 fill-muted stroke-muted-foreground" />-->
<!--                        </div>-->
<!--                        <Badge>4.0</Badge>-->
<!--                    </div>-->
                    <div class="grid gap-4 text-sm leading-loose">
                        <p>
                            {{ product.description }}
                        </p>
                    </div>
                </div>
            </div>
            <form class="grid gap-4 md:gap-8 lg:col-span-2">
                <div class="text-4xl font-bold">{{ product.price }}$</div>
<!--                <div class="grid gap-2">-->
<!--                    <Label htmlFor="color" class="text-base">-->
<!--                        Color-->
<!--                    </Label>-->
<!--                    <RadioGroup id="color" defaultValue="black" class="flex items-center gap-2">-->
<!--                        <Label htmlFor="color-black"-->
<!--                            class="border cursor-pointer rounded-md p-2 flex items-center gap-2 [&:has(:checked)]:bg-gray-100 dark:[&:has(:checked)]:bg-gray-800">-->
<!--                            <RadioGroupItem id="color-black" value="black" />-->
<!--                            Black-->
<!--                        </Label>-->
<!--                        <Label htmlFor="color-white"-->
<!--                            class="border cursor-pointer rounded-md p-2 flex items-center gap-2 [&:has(:checked)]:bg-gray-100 dark:[&:has(:checked)]:bg-gray-800">-->
<!--                            <RadioGroupItem id="color-white" value="white" />-->
<!--                            White-->
<!--                        </Label>-->
<!--                        <Label htmlFor="color-blue"-->
<!--                            class="border cursor-pointer rounded-md p-2 flex items-center gap-2 [&:has(:checked)]:bg-gray-100 dark:[&:has(:checked)]:bg-gray-800">-->
<!--                            <RadioGroupItem id="color-blue" value="blue" />-->
<!--                            Blue-->
<!--                        </Label>-->
<!--                    </RadioGroup>-->
<!--                </div>-->
<!--                <div class="grid gap-2">-->
<!--                    <Label htmlFor="size" class="text-base">-->
<!--                        Size-->
<!--                    </Label>-->
<!--                    <RadioGroup id="size" defaultValue="m" class="flex items-center gap-2">-->
<!--                        <Label htmlFor="size-xs"-->
<!--                            class="border cursor-pointer rounded-md p-2 flex items-center gap-2 [&:has(:checked)]:bg-gray-100 dark:[&:has(:checked)]:bg-gray-800">-->
<!--                            <RadioGroupItem id="size-xs" value="xs" />-->
<!--                            XS-->
<!--                        </Label>-->
<!--                        <Label htmlFor="size-s"-->
<!--                            class="border cursor-pointer rounded-md p-2 flex items-center gap-2 [&:has(:checked)]:bg-gray-100 dark:[&:has(:checked)]:bg-gray-800">-->
<!--                            <RadioGroupItem id="size-s" value="s" />-->
<!--                            S-->
<!--                        </Label>-->
<!--                        <Label htmlFor="size-m"-->
<!--                            class="border cursor-pointer rounded-md p-2 flex items-center gap-2 [&:has(:checked)]:bg-gray-100 dark:[&:has(:checked)]:bg-gray-800">-->
<!--                            <RadioGroupItem id="size-m" value="m" />-->
<!--                            M-->
<!--                        </Label>-->
<!--                        <Label htmlFor="size-l"-->
<!--                            class="border cursor-pointer rounded-md p-2 flex items-center gap-2 [&:has(:checked)]:bg-gray-100 dark:[&:has(:checked)]:bg-gray-800">-->
<!--                            <RadioGroupItem id="size-l" value="l" />-->
<!--                            L-->
<!--                        </Label>-->
<!--                        <Label htmlFor="size-xl"-->
<!--                            class="border cursor-pointer rounded-md p-2 flex items-center gap-2 [&:has(:checked)]:bg-gray-100 dark:[&:has(:checked)]:bg-gray-800">-->
<!--                            <RadioGroupItem id="size-xl" value="xl" />-->
<!--                            XL-->
<!--                        </Label>-->
<!--                    </RadioGroup>-->
<!--                </div>-->
<!--                <div class="grid gap-2">-->
<!--                    <Label htmlFor="quantity" class="text-base">-->
<!--                        Quantity-->
<!--                    </Label>-->
<!--                    <Select defaultValue="1">-->
<!--                        <SelectTrigger class="w-24">-->
<!--                            <SelectValue placeholder="Select" />-->
<!--                        </SelectTrigger>-->
<!--                        <SelectContent>-->
<!--                            <SelectItem value="1">1</SelectItem>-->
<!--                            <SelectItem value="2">2</SelectItem>-->
<!--                            <SelectItem value="3">3</SelectItem>-->
<!--                            <SelectItem value="4">4</SelectItem>-->
<!--                            <SelectItem value="5">5</SelectItem>-->
<!--                        </SelectContent>-->
<!--                    </Select>-->
<!--                </div>-->
                <div class="flex flex-col gap-2 min-[400px]:flex-row">
                    <!-- <Button size="lg">Add to cart</Button> -->
                    <addToCartButton :product="product"/>
                    <Button size="lg" variant="outline">
                        <HeartIcon class="w-4 h-4 mr-2" />
                        Ajouter aux favorite
                    </Button>
                </div>
            </form>
        </div>
    </div>
</template>
