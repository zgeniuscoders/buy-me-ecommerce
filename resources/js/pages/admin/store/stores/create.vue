<template>

  <main class="bg-blue-800 h-screen"
    style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('https://img.freepik.com/free-photo/beautiful-smiling-young-blonde-woman-pointing-sunglasses-holding-shopping-bags-credit-card-pink-wall_496169-1506.jpg?t=st=1721222922~exp=1721226522~hmac=8dfd91bde446a8efa572c5b7bd702e1d4743b0d3d794da875f1e12ff5d61703b&w=1800')">

    <div class="container mx-auto p-8">
      <ul class="relative flex flex-row gap-x-2 justify-center w-full">

        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group active">
          <span
            class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
            <span
              class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
              <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
              <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
            <span
              class="ms-2 text-sm font-medium text-white group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
              Nom de la boutique
            </span>
          </span>
          <div
            class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500">
          </div>
        </li>

        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
          <span
            class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
            <span
              class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
              <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
              <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
            <span
              class="ms-2 text-sm font-medium text-white group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
              Images
            </span>
          </span>
          <div
            class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500">
          </div>
        </li>

        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
          <span
            class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
            <span
              class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700">
              <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
              <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
            <span class="ms-2 text-sm font-medium text-white group-focus:text-gray-500">
              Step
            </span>
          </span>
          <div
            class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
          </div>
        </li>

      </ul>

      <div class="mt-5 sm:mt-8">
        <step-welcome />
      </div>
    </div>


  </main>


</template>

<script setup>
import StepWelcome from "./components/steps/step-welcome.vue";

</script>

<style scoped></style>
