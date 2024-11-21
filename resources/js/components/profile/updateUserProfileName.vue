<script setup lang="ts">
import {useForm} from '@inertiajs/vue3';
import {createToaster} from "@meforma/vue-toaster";
import Input from '../ui/input/Input.vue';
import Label from '../ui/label/Label.vue';
import Button from '../ui/button/Button.vue';
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"
import {type User} from "@/models/User.ts";

const toaster = createToaster();

const {user} = defineProps<{
    user: User
}>()

const profileNamesForm = useForm({
    name: "",
    email: ""
})

profileNamesForm.name = user.name
profileNamesForm.email = user.email

const saveProfileInfo = () => {
    profileNamesForm.put("/changer-mon-nom-ou-adresse-email", {
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
    <form action="" method="post" class="space-y-4">

        <card>

            <CardHeader>
                <CardTitle>
                    Profile
                </CardTitle>
                <CardDescription>
                    Update your accounts's profile information and email address.
                </CardDescription>
            </CardHeader>

            <CardContent class="space-y-4">
                <div class="space-y-2">
                    <Label for="name">Nom d'utilisateur</Label>
                    <Input v-model="profileNamesForm.name" placeholder="Nom d'utilisateur" id="name"/>
                    <span v-if="profileNamesForm.errors.name" class="text-red-400 text-sm">{{
                            profileNamesForm.errors.name
                        }}</span>
                </div>

                <div class="space-y-2">
                    <Label for="name">Email</Label>
                    <Input v-model="profileNamesForm.email" placeholder="Adresse email" id="name"/>
                    <span v-if="profileNamesForm.errors.email" class="text-red-400 text-sm">{{
                            profileNamesForm.errors.email
                        }}</span>
                </div>

            </CardContent>

            <CardFooter>
                <Button type="submit" @click.prevent="saveProfileInfo"
                        class="p-2 rounded-md hover:bg-primary-dark transition-all">
                    Modifier
                </Button>
            </CardFooter>

        </card>
    </form>

</template>
