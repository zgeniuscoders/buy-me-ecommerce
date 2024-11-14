<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import Button from '@/components/ui/button/Button.vue';
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"

const toaster = createToaster();

const profileNamesForm = useForm({
    name: "",
    email: ""
})

const saveProfileInfo = () => {
    profileNamesForm.put("/mon-compte/changer-mon-nom-ou-adresse-email", {
        onError: (e) => {
            console.error(e);
        },
        onSuccess: () => {
            toaster.success("Votre profile a ete bien mis a jour")
        }
    })
}

</script>

<template>
    <card>

        <CardHeader>
            <CardTitle>
                Profile
            </CardTitle>
            <CardDescription>
                Update your accounts's profile information and email address.
            </CardDescription>
        </CardHeader>

        <CardContent>
            <form action="" method="post" class="space-y-4">
                <div>
                    <Label for="name">Nom d'utilisateur</Label>
                    <Input v-model="profileNamesForm.name" placeholder="Nom d'utilisateur" id="name" />
                    <span v-if="profileNamesForm.errors.name" class="text-red-400 text-sm" pla>{{
                        profileNamesForm.errors.name }}</span>
                </div>

                <div>
                    <Label for="name">Email</Label>
                    <Input v-model="profileNamesForm.email" placeholder="Adresse email" id="name" />
                    <span v-if="profileNamesForm.errors.email" class="text-red-400 text-sm" pla>{{
                        profileNamesForm.errors.email }}</span>
                </div>


                <Button type="submit" @click.prevent="saveProfileInfo"
                    class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                    Modifier
                </Button>
            </form>
        </CardContent>

    </card>
</template>
