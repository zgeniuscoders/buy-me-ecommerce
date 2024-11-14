<template>

  <main class="bg-background h-screen">

    <div class="container mx-auto p-8">

      <steppers :currentState="state.index" :items="steps" />



      <div class="mt-5 sm:mt-8">
        <step-welcome v-if="state.index == 1" @next="next" />

        <step-store-name :nameError="shopForm.errors.name" :descriptionError="shopForm.errors.description"
          v-else-if="state.index == 2" @next="next" @prev="prev" />

        <step-store-image v-else-if="state.index == 3" @next="next" @prev="prev" :imageError="shopForm.errors.image" />


        <step-finish v-else-if="state.index == 4" @finish="finish" @prev="prev" />

      </div>



    </div>


  </main>


</template>

<script lang="ts" setup>
import { ref } from "vue";
import StepWelcome from "./components/steps/step-welcome.vue";
import stepStoreName from "./components/steps/step-store-name.vue";
import stepStoreImage from "./components/steps/step-store-image.vue";
import stepFinish from "./components/steps/step-finish.vue";
import { useForm, router } from "@inertiajs/vue3";
import steppers from "./components/steppers.vue";


const state = ref({
  index: 1,
  loading: false
})

const steps = ref([
  {
    title: "Bienvenu sur matrixt"
  },
  {
    title: "Informations générales de la boutique"
  },
  {
    title: "Logo de la boutique"
  },
  {
    title: "Condition d.tsx'utilisation"
  }
])

const shopForm = useForm({
  name: "",
  description: "",
  image: "",
})


const next = (data: Object) => {

  if (data && 'name' in data && 'description' in data) {
    shopForm.name = data.name
    shopForm.description = data.description
  }

  if (data && 'image' in data) {
    shopForm.image = data.image
  }

  state.value.index++

}

const finish = () => {
  submit()
}

const prev = () => {
  state.value.index--
}

const submit = async () => {
  shopForm.post('/ma-boutique', {
    onSuccess: () => {
      shopForm.clearErrors()
      router.visit('/ma-boutique')
    },
    onError: () => {
      state.value.index = 2
      console.log('error')
    }
  })
}

</script>

<style scoped></style>
