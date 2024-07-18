<script setup>
const emit = defineEmits(["update:modelValue"]);

const props = defineProps({
    name: "",
    title: "",
    placeholder: "",
    value: "",
    modelValue: [String, Number],
    options: Object
});
</script>

<template>
    <label class="block text-gray-700" for="{{ props.name }}">{{ props.title }}</label>
    <select
           :name="props.name"
           :value="props.modelValue"
           :id="props.name"
           v-on:input="($event) => emit('update:modelValue', $event.target.value)"
           class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
            autofocus required>
        <template v-for="option in props.options" :key="option">
            <option>{{ option?.name }}</option>
        </template>
    </select>
</template>

<style scoped>

</style>
