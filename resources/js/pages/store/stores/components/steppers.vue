<template>
    <div className="flex items-center justify-between w-full px-4 py-6">
        <template v-for="step, index in props.items" :key="index">
            <div className="flex items-center space-x-2">
                <div :class="index + 1 <= props.currentState ? 'bg-green-500' : ' bg-gray-300'"
                    class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold">
                    {{ index + 1 }}
                </div>
                <div className="text-sm font-semibold">{{ step.title }}</div>
            </div>
            <div class="w-24 h-1" :class="index + 1 <= props.currentState ? 'bg-green-500' : ' bg-gray-300'"
                v-if="index < 3" />
        </template>


        <!-- <div className="flex items-center space-x-2">
            <div className="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white font-bold">2
            </div>
            <div className="text-sm font-semibold">Step 2: Personal Details</div>
        </div>

        <div className="w-24 h-1 bg-green-500" />
        <div className="flex items-center space-x-2">
            <div className="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white font-bold">3
            </div>
            <div className="text-sm font-semibold">Step 3: Preferences</div>
        </div>

        <div className="w-24 h-1 bg-gray-300" />
        <div className="flex items-center space-x-2">
            <div className="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center text-gray-500 font-bold">
                4
            </div>
            <div className="text-sm font-semibold text-gray-500">Step 4: Confirmation</div>
        </div> -->

    </div>
</template>

<script setup lang="ts">

const props = defineProps({
    currentState: 1,
    items: []
})

</script>