
<template>
    <div class="bg-red-500 rounded-full text-white absolute w-4 h-4 text-center text-sm -top-2 right-0 flex items-center justify-center">
        {{counter}}
    </div>
</template>


<script setup>
    import {ref} from "vue";
    const counter = ref(0)

    import emit from "tiny-emitter/instance.js"

    emit.on("cartChange", (count) => {
        counter.value = counter.value + count
        console.log(count)
    })

</script>

<style scoped>

</style>
