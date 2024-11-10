<script setup lang="ts">
import checkoutButton from './checkoutButton.vue';
import { Card, CardHeader, CardTitle, CardContent, CardFooter } from "@/components/ui/card"

const props = defineProps({
    totalPrice: Number,
    totalItems: Number
})

</script>

<template>
    <div class="grid gap-4">
        <Card>
            <CardHeader>
                <CardTitle>Détails de la commande</CardTitle>
            </CardHeader>
            <CardContent class="grid gap-4">
                <div class="flex items-center justify-between">
                    <span>Prix HT</span>
                    <span class="font-medium">{{ props.totalPrice }}$</span>
                </div>
<!--                <div class="flex items-center justify-between">-->
<!--                    <span>Tva</span>-->
<!--                    <span class="font-medium">16%</span>-->
<!--                </div>-->
                <Separator />
                <div class="flex items-center justify-between font-medium text-lg">
                    <span>Prix TTC</span>
<!--                    <span>{{ (props.totalPrice * 16) / 100 }}$</span>-->
                    <span>{{ props.totalPrice}}$</span>
                </div>
            </CardContent>
            <CardFooter>
                <checkout-button/>
            </CardFooter>
        </Card>
    </div>
</template>

<style scoped></style>
