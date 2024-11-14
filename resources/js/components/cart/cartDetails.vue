<script setup lang="ts">
import checkoutButton from './checkoutButton.vue';
import {Card, CardHeader, CardTitle, CardContent, CardFooter} from "@/components/ui/card"
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/components/ui/dialog'
import {router, useForm} from "@inertiajs/vue3";
import {Label} from "@/components/ui/label";
import {Button} from "@/components/ui/button";
import {Input} from "@/components/ui/input";
import {Separator} from "@/components/ui/separator";
import {createToaster} from "@meforma/vue-toaster";
import {Address} from "@/models/Address.ts";


const toaster = createToaster();

const {totalPrice, totalItems, address} = defineProps<{
    totalPrice: number,
    totalItems: number,
    address: Address
}>()

// const address = useForm({
//     phone_number: "",
//     city: "",
//     address: "",
//     postal_code: ""
// })

const addAddress = () => {
    address.post('/mon-compte/address', {
        onError: () => {
            toaster.error("error")
        },
        onSuccess: () => {
            toaster.success("success")
            address.reset()
        }
    })
}

</script>

<template>
    <Dialog>
        <DialogTrigger as-child>
            <div class="grid gap-4">
                <Card>
                    <CardHeader>
                        <CardTitle>Détails de la commande</CardTitle>
                    </CardHeader>
                    <CardContent class="grid gap-4">
                        <div class="flex items-center justify-between">
                            <span>Prix HT</span>
                            <span class="font-medium">{{ totalPrice }}$</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>Tva</span>
                            <span class="font-medium">16%</span>
                        </div>
                        <Separator/>
                        <div class="flex items-center justify-between font-medium text-lg">
                            <span>Prix TTC</span>
                            <span>{{ totalPrice + ((totalPrice * 16) / 100) }}$</span>
                        </div>
                    </CardContent>
                    <CardFooter>
                        <checkout-button/>
                    </CardFooter>
                </Card>
            </div>
        </DialogTrigger>
        <DialogContent>
            <DialogHeader>
                <DialogTitle>Adresse du livraison</DialogTitle>
                <DialogDescription>
                    Veuillez reseigner l'adresse de la livraison
                </DialogDescription>
            </DialogHeader>


            <div>
                <Label for="address">Adresse</Label>
                <Input v-model="address.address" placeholder="Adresse" id="address"/>
                <!--                <span v-if="address.errors.address" class="text-red-400 text-sm">{{-->
                <!--                        address.errors.address-->
                <!--                    }}</span>-->
            </div>

            <div>
                <Label for="city">Ville</Label>
                <Input v-model="address.city" placeholder="Ville/Province" id="city"/>
                <!--                <span v-if="address.errors.city" class="text-red-400 text-sm">{{-->
                <!--                        address.errors.city-->
                <!--                    }}</span>-->
            </div>

            <div>
                <Label for="phone_number">Numero de telephone</Label>
                <Input v-model="address.phone_number" placeholder="+243xxxxxxx" id="phone_number"
                       type="phone"/>
                <!--                <span v-if="address.errors.phone_number" class="text-red-400 text-sm">{{-->
                <!--                        address.errors.phone_number-->
                <!--                    }}</span>-->
            </div>

            <DialogFooter>
                <Button type="submit" @click="$emit('checkout')">
                    Passer la commande
                </Button>
            </DialogFooter>


        </DialogContent>
    </Dialog>
</template>

<style scoped></style>
