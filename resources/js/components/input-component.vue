<template>
    <div>
        <div class="my-2" v-if="data.type === 'textarea'">
            <label class="block text-gray-700" for="{{ props.name }}">{{ data.title }}</label>
            <textarea :placeholder="data.placeholder" :name="data.name" :value="data.modelValue" :id="data.name"
                v-on:input="($event) => emit('update:modelValue', $event.target.value)"
                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                required>{{ data.modelValue }}</textarea>
        </div>
        <div class="my-2" v-else>
            <label class="block text-gray-700" for="{{ props.name }}">{{ data.title }}</label>
            <input :placeholder="data.placeholder" :name="data.name" :value="data.modelValue" :type="data.type"
                :id="data.name" v-on:input="($event) => emit('update:modelValue', $event.target.value)"
                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                autofocus autocomplete required>

        </div>
        <div class="text-red-500 my-2" v-if="data.error">{{ data.error }}</div>

    </div>

</template>

<script setup lang="ts">
const emit = defineEmits(["update:modelValue"]);

type Input = {
    name: string,
    title: string,
    type: string,
    placeholder: string,
    modelValue: string,
    error: string
}

interface Props {
    data: Input
}

const { data } = defineProps<Props>()
</script>

<style scoped></style>
