<script setup lang="ts">
import { ButtonHTMLAttributes } from 'vue';

type ButtonType = {
    title: string,
    type: ButtonHTMLAttributes,
    isLink: boolean,
    link: string,
    onClick: CallableFunction
}

interface ButtonProps {
    props: ButtonType
}

const { props } = defineProps<ButtonProps>()

</script>

<template>
    <button :type="props.type.type"
        class="flex w-full items-center justify-center rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-primary focus:outline-none focus:ring-4 focus:ring-primary">
        <a :href="props.link" v-if="props.isLink">{{ props.title }}</a>
        <template v-else>{{ props.title }}</template>
    </button>
</template>