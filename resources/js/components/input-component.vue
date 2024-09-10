<template>
    <div>
        <div class="my-2" v-if="props.type === 'textarea'">
            <label class="block text-gray-700" for="{{ props.name }}">{{ props.title }}</label>
            <textarea :placeholder="props.placeholder"
                      :name="props.name"
                      :value="props.modelValue"
                      :id="props.name"
                      v-on:input="($event) => emit('update:modelValue', $event.target.value)"
                      class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                      required>{{ props.modelValue }}</textarea>
        </div>
        <div class="my-2" v-else>
            <label class="block text-gray-700" for="{{ props.name }}">{{ props.title }}</label>
            <input :placeholder="props.placeholder"
                   :name="props.name"
                   :value="props.modelValue"
                   :type="props.type"
                   :id="props.name"
                   v-on:input="($event) => emit('update:modelValue', $event.target.value)"
                   class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                   autofocus autocomplete required>

        </div>
        <div class="text-red-500 my-2" v-if="props.error">{{ props.error }}</div>

    </div>

</template>

<script setup lang="ts">
const emit = defineEmits(["update:modelValue"]);

const props = defineProps({
    name: "",
    title: "",
    placeholder: "",
    value: "",
    modelValue: [String, Number],
    type: "",
    error: ""
});
</script>

<style scoped>

</style>
