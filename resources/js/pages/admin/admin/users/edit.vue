<script setup lang="ts">
import adminLayout from '../../layouts/adminLayout.vue';
import card from '@/components/card.vue';
import inputComponent from '@/components/input-component.vue';
import selectComponent from '@/components/select-component.vue';
import { useForm, usePage } from '@inertiajs/vue3';
import { createToaster } from "@meforma/vue-toaster";
import { ref } from 'vue';

const toaster = createToaster();
const props = usePage().props
const user = ref({})

user.value = props.user

const userForm = useForm({
    role_id: 1,
    status: 1
})


const editUser = () => {
    userForm.put("/admin/utilisateurs/" + user.id, {
        onError: (e) => {
            toaster.error("Une erreur se produite lors de l'ajout de l'utilisateur ")
        },
        onSuccess: () => {
            toaster.success(`Modification effectuer avec success`)
        }
    })
}

</script>

<template>

    <admin-layout>
        <section class="p-2">
            <h1 class="text-xl p-4">Modification du role de l'utilisateur <strong>{{ user.name }}</strong> </h1>
            <form action="" method="post" class="space-y-4">

                <card>

                    <div class="grid md:grid-cols-2 gap-4">
                        <!-- <select-component id="category_id" name="category_id" title="Sous category"
                            :options="$page.props.categories" v-model="categoryForm.category_id"
                            :error="categoryForm.errors.category_id" :idKey="true" /> -->

                        <div>
                            <select-component id="status" name="status" title="Status du compte"
                                :options="$page.props.status" v-model="userForm.status"
                                :error="userForm.errors.status" />
                        </div>
                    </div>

                </card>

                <card>
                    <div class="flex items-end justify-end">
                        <button type="submit" @click.prevent="editUser"
                            class="bg-primary text-white p-2 rounded-md hover:bg-primary-dark transition-all">
                            Modifier
                        </button>
                    </div>
                </card>
            </form>

        </section>
    </admin-layout>

</template>