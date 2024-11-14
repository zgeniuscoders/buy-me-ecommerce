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

const passwordForm = useForm({
    current_password: "",
    password: "",
    password_confirmation: ""
})

const updatePassword = () => {
    passwordForm.put("/mon-compte/changer-mot-de-passe", {
        onError: (e) => {
            console.error(e);

        },
        onSuccess: () => {
            toaster.success("Votre mot de passe a ete changer")
            passwordForm.reset()
        }
    })
}

</script>

<template>
    <card>
        <CardHeader>
            <CardTitle>
                Update password
            </CardTitle>
            <CardDescription>
                Ensure your account is using a long, random password to stay secure.
            </CardDescription>
        </CardHeader>
        <CardContent>
            <form action="" method="post" class="space-y-2">

                <div>
                    <Label for="currentPassword">Mot de passe actuelle</Label>
                    <Input v-model="passwordForm.current_password" placeholder="Mot de passe actuelle"
                        id="currentPassword" />
                    <span v-if="passwordForm.errors.current_password" class="text-red-400 text-sm" pla>{{
                        passwordForm.errors.current_password }}</span>
                </div>

                <div>
                    <Label for="password">Nouveau mot de passe</Label>
                    <Input v-model="passwordForm.password" placeholder="Nouveau mot de passe" id="password" />
                    <span v-if="passwordForm.errors.password" class="text-red-400 text-sm" pla>{{
                        passwordForm.errors.password }}</span>
                </div>

                <div>
                    <Label for="password">Confirmer le mot de passe</Label>
                    <Input v-model="passwordForm.password_confirmation" placeholder="Confirmer le mot de passe"
                        id="confirmation_password" />
                    <span v-if="passwordForm.errors.password_confirmation" class="text-red-400 text-sm" pla>{{
                        passwordForm.errors.password_confirmation }}</span>
                </div>

                <Button type="submit" @click.prevent="updatePassword"
                    class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                    Modifier le mot de passe
                </Button>
            </form>
        </CardContent>

    </card>
</template>