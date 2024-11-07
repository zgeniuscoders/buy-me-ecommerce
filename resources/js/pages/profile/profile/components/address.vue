<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import Button from '@/components/ui/button/Button.vue';
import { createToaster } from "@meforma/vue-toaster";

import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"
import { Address } from '@/models/Address';
import { onMounted } from 'vue';

const toaster = createToaster();

const { updateAddresseRoute, address } = defineProps<{
    updateAddresseRoute: string,
    address: Address
}>()

const addressForm = useForm({
    phone_number: "",
    city: "",
    address: "",
    postal_code: 0
})

onMounted(() => {
    addressForm.address = address.address
    addressForm.city = address.city,
    addressForm.phone_number = address.phone_number,
    addressForm.postal_code = address.postal_code
})

const updateUserAddress = () => {
    addressForm.put(updateAddresseRoute, {
        onError: () => {
            toaster.error("error")
        },
        onSuccess: () => {
            toaster.success("success")
        }
    })
}


</script>

<template>
    <div>
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
                        <Input v-model="addressForm.address" placeholder="Adresse" id="address" />
                        <span v-if="addressForm.errors.address" class="text-red-400 text-sm" pla>{{
                            addressForm.errors.address }}</span>
                    </div>

                    <div>
                        <Label for="city">Ville</Label>
                        <Input v-model="addressForm.city" placeholder="Ville/Province" id="city" />
                        <span v-if="addressForm.errors.city" class="text-red-400 text-sm" pla>{{
                            addressForm.errors.city }}</span>
                    </div>

                    <div>
                        <Label for="phone_number">Numero de telephone</Label>
                        <Input v-model="addressForm.phone_number" placeholder="+243xxxxxxx" id="phone_number"
                            type="phone" />
                        <span v-if="addressForm.errors.phone_number" class="text-red-400 text-sm" pla>{{
                            addressForm.errors.phone_number }}</span>
                    </div>


                    <Button type="submit" @click.prevent="updateUserAddress"
                        class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                        Modifier
                    </Button>
                </form>
            </CardContent>
        </card>
    </div>
</template>