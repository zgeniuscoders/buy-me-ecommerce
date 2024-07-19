<template>
    <section class="flex items-center justify-center">
        <div
            class="w-full max-w-3xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
            <form class="space-y-6" method="post" action="/store">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Création de la boutique</h5>

                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                    {{ form.progress.percentage }}%
                </progress>

                <div>
                    <input-component type="text" placeholder="Store name" name="name" id="name" title="Nom de la boutique"
                                     v-model="form.name"/>
                    <div class="text-red-500" v-if="form.errors.name">{{ form.errors.name }}</div>
                </div>

                <div>
                    <input-component type="textarea" placeholder="Store name" name="description" id="description"
                                     title="Description" v-model="form.description"/>
                    <div class="text-red-500" v-if="form.errors.description">{{ form.errors.description }}</div>
                </div>


                <button type="submit"
                        @click.prevent="submit"
                        :disabled="form.processing"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Suivant
                </button>

            </form>
        </div>
    </section>
</template>

<script setup>
import {ref} from "vue";
import emitter from "tiny-emitter/instance"
import InputComponent from "../../../../../../components/input-component.vue";
import {router, useForm} from "@inertiajs/vue3";

const form = useForm({
    name: "",
    description: "",
    img: "",
})

const submit = async () => {
    form.post('/store', {
        onSuccess: () => {
            form.clearErrors()
            router.visit('/admin')
            console.log(router)
        },
        onError: () => {
            console.log('error')
        }
    })
}


const img = ref("log.jpg")

const props = defineProps(["formValues"])
const next = () => {
    emitter.emit("changeStep")
}
</script>

<style scoped>


</style>
