<script setup lang="ts">

import AdminLayout from "@/pages/admin/layouts/adminLayout.vue";
import {Button} from "@/components/ui/button";
import {useForm, usePage} from "@inertiajs/vue3";
import {Card, CardContent, CardHeader, CardTitle} from "@/components/ui/card";
import {Input} from "@/components/ui/input";
import {Label} from "@/components/ui/label";
import {createToaster} from "@meforma/vue-toaster";

const toaster = createToaster();

const {roles, permission,addPermissionRoute} = usePage().props
const form = useForm({
    name: "",
    roles: []
})

const addPermission = () => {
    form.post(addPermissionRoute, {
        onError: () => {
            toaster.error("error updating")
        },
        onSuccess: () => {
            toaster.success("success")
        }
    })
}

</script>

<template>
    <admin-layout>
        <div class="container max-w-screen-lg">
            <div class="space-y-4">
                <form action="">
                    <div class="mb-4 flex items-center justify-between space-y-2">
                        <h1 class="text-2xl font-bold tracking-tight">AJout d'une permissions</h1>
                        <div class="flex gap-2">
                            <Button @click.prevent="addPermission">
                                Enregistrer
                            </Button>
                        </div>
                    </div>
                    <div>
                        <card>

                            <CardHeader>
                                <CardTitle>Informations générales du role</CardTitle>
                            </CardHeader>
                            <CardContent>
                                <div class="space-y-4">
                                    <Label for="name">Nom du role</Label>
                                    <Input placeholder="Nom du role" v-model="form.name" id="name" disabled/>
                                    <span v-if="form.errors.name" class="text-red-400 text-sm">{{
                                            form.errors.name
                                        }}</span>
                                </div>
                            </CardContent>
                        </card>
                    </div>
                </form>
            </div>
        </div>

    </admin-layout>
</template>

<style scoped>

</style>
