<script setup lang="ts">

import AdminLayout from "@/pages/admin/admin/layouts/adminLayout.vue";
import {Card, CardHeader, CardTitle, CardContent} from "@/components/ui/card";
import {Button} from "@/components/ui/button";
import {Input} from "@/components/ui/input";
import {Label} from "@/components/ui/label";
import {createToaster} from "@meforma/vue-toaster";
import {useForm, usePage} from "@inertiajs/vue3";

const toaster = createToaster();

const {updateRoleRoute, role} = usePage().props
const form = useForm({
    name: ""
})

form.name = role.name

const submit = () => {
    form.put(updateRoleRoute, {
        onError: () => {
            toaster.error("Error")
        },
        onSuccess: () => {
            toaster.success("Success")
        },
    })
}
</script>

<template>
    <admin-layout>
        <div class="container max-w-screen-lg">
            <div class="space-y-4">
                <form action="">
                    <div class="mb-4 flex items-center justify-between space-y-2">
                        <h1 class="text-2xl font-bold tracking-tight">Modification role</h1>
                        <div class="flex gap-2">
                            <Button @click.prevent="submit">Publish</Button>
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
                                    <Input placeholder="Nom du role" v-model="form.name" id="name"/>
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
