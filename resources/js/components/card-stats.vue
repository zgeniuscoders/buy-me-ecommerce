<template>
    <Card class="p-4">
        <div class="flex items-center">

            <div class="p-2 rounded-md flex items-center justify-center h-[50px] w-[50px] mr-4 text-white" :class="bgColor">
                <slot/>
            </div>

            <div>
                <h4>{{ text }}</h4>
                <h3 class="text-2xl font-medium">{{ count }}</h3>
            </div>

        </div>
        <!-- <hr class="border-t w-full mt-4">
        <div class="flex items-center justify-between mt-4">
            <span class="text-gray-400 text-sm">VS Previous Day</span>
            <h4 class="text-emerald-600 text-sm">2,67</h4>
        </div> -->

    </Card>
</template>

<script lang="ts" setup>

import {Card} from "@/components/ui/card";

const {bgColor,text,count} = defineProps<{
    bgColor: string,
    text: string,
    count: string,
}>()

</script>
