<script setup lang="ts">
const emit = defineEmits(["update:modelValue"]);

type Input = {
    name: String,
    title: string,
    inputType: string,
    placeholder: string,
    modelValue: string,
    error: string
}

interface Props {
    data: Input
}

// const {data}  = defineProps<Props>()

const data = defineProps({
    name: String,
    title: String,
    inputType: String,
    placeholder: String,
    modelValue: String,
    error: String
})

console.log(data);


</script>

<style scoped></style>
<template>
    <div>

        <div class="my-2" v-if="data.inputType === 'textarea'">
            <label class="block text-gray-700" for="{{ props.name }}">{{ data.title }}</label>
            <textarea :placeholder="data.placeholder" :name="data.name" :value="data.modelValue" :id="data.name"
                v-on:input="($event) => emit('update:modelValue', $event.target.value)"
                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-outline-dark focus:bg-background focus:outline-none"
                required>{{ data.modelValue }}</textarea>
        </div>
        <div class="my-2" v-else-if="data.inputType === 'hidden'">
            <input :placeholder="data.placeholder" :name="data.name" :value="data.modelValue" :type="data.inputType"
                :id="data.name" v-on:input="($event) => emit('update:modelValue', $event.target.value)"
                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-outline-dark focus:bg-background focus:outline-none"
                autofocus autocomplete required>
        </div>
        <div class="my-2" v-else>
            <label class="block text-gray-700" for="{{ props.name }}">{{ data.title }}</label>
            <input :placeholder="data.placeholder" :name="data.name" :value="data.modelValue" :type="data.inputType"
                :id="data.name" v-on:input="($event) => emit('update:modelValue', $event.target.value)"
                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-outline-dark focus:bg-background focus:outline-none"
                autofocus autocomplete required>

        </div>
        <div class="text-error my-2" v-if="data.error">{{ data.error }}</div>

    </div>

</template>