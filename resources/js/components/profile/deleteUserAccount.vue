<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";
import Button from '../ui/button/Button.vue';
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"

const toaster = createToaster();

const deleteAccount = () => {
    let isTrue: Boolean = confirm("voulez-vous vraiment supprimer votre compte ?")
    if (isTrue) {

    }
}

</script>


<template>
    <card>
        <CardHeader>
            <CardTitle>Delete account</CardTitle>
            <CardDescription>
                Once your account is deleted , all of its resources and data will be permenantly
                deleted,
                Before deleting your account , please download any data or information that you wish to retain
            </CardDescription>
        </CardHeader>

        <CardFooter>
            <Button type="submit" @click.prevent="deleteAccount"
                class="bg-red-500 text-white p-2 rounded-md hover:bg-error transition-all">
                Supprimer mon compte
            </Button>
        </CardFooter>

    </card>
</template>
