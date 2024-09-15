<script setup lang="ts">
const emit = defineEmits(["update:modelValue"]);

type Option = {
    id: number,
    name?: string
}

type Select = {
    name: string,
    title: string,
    placeholder: string,
    value: string,
    modelValue: [String, Number],
    options: Option,
    error: string
}

interface Props {
    data: Select
}

const {data} = defineProps<Props>()

</script>

<template>
    <label class="block text-gray-700" for="{{ props.name }}">{{ data.title }}</label>
    <select
           :name="data.name"
           :value="data.modelValue"
           :id="data.name"
           v-on:input="($event) => emit('update:modelValue', $event.target.value)"
           class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
            autofocus required>
        <template v-for="option in data.options" :key="option">
            <option :value="option.id">{{ option?.name }}</option>
        </template>


    </select>
    <div class="text-red-500 my-2" v-if="data.error">{{ data.error }}</div>

</template>

<style scoped>

</style>
