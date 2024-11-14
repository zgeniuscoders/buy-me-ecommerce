<template>
    <article class="p-4 shadow-md bg-white rounded-md">
        <div class="flex items-center">

            <div class="p-2 rounded-md flex items-center justify-center h-[50px] w-[50px] mr-4 text-white" :class="bgColor">
                <ion-icon :name="icon"></ion-icon>
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

    </article>
</template>

<script lang="ts" setup>

const {bgColor,text,count,icon} = defineProps<{
    bgColor: string,
    text: string,
    count: string,
    icon: string
}>()

</script>
