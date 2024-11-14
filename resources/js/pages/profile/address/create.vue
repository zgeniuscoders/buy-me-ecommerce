<script setup lang="ts">

import accountLayout from '../layouts/accountLayout.vue';
import { useForm, usePage } from "@inertiajs/vue3";
import { createToaster } from "@meforma/vue-toaster";
import Label from '@/components/ui/label/Label.vue';
import Input from '@/components/ui/input/Input.vue';
import { Button } from '@/components/ui/button';
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"

const toaster = createToaster();

const { addAddressRoute } = usePage().props
const address = useForm({
    phone_number: "",
    city: "",
    address: "",
    postal_code: ""
})

const addAddress = () => {
    address.post(addAddressRoute, {
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

    <accountLayout>
        <section class="m-4">
            <card>
                <CardHeader>
                    <CardTitle>
                        Adresse
                    </CardTitle>
                    <CardDescription>
                        Update your accounts's profile information and email address.
                    </CardDescription>
                </CardHeader>
                <CardContent>
                    <form action="" method="post" class="space-y-4">
                        <div>
                            <Label for="address">Adresse</Label>
                            <Input v-model="address.address" placeholder="Adresse" id="address" />
                            <span v-if="address.errors.address" class="text-red-400 text-sm" pla>{{
                                address.errors.address }}</span>
                        </div>

                        <div>
                            <Label for="city">Ville</Label>
                            <Input v-model="address.city" placeholder="Ville/Province" id="city" />
                            <span v-if="address.errors.city" class="text-red-400 text-sm" pla>{{
                                address.errors.city }}</span>
                        </div>

                        <div>
                            <Label for="phone_number">Numero de telephone</Label>
                            <Input v-model="address.phone_number" placeholder="+243xxxxxxx" id="phone_number"
                                type="phone" />
                            <span v-if="address.errors.phone_number" class="text-red-400 text-sm" pla>{{
                                address.errors.phone_number }}</span>
                        </div>


                        <Button type="submit" @click.prevent="addAddress"
                            class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                            Ajouter
                        </Button>
                    </form>
                </CardContent>
            </card>
        </section>
    </accountLayout>

</template>