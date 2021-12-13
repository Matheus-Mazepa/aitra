<template>
  <div class="flex flex-col md:p-10 p-4">
    <notifications position="top right"/>
    <div class="flex flex-col items-center justify-center md-pt-20 h-full select-none">
      <div
        class="flex flex-col mt-10 mb-10 bg-white md:px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-xl shadow-2xl w-full max-w-md  border-l-4 border-green-700">
        <header class="max-w-lg mx-auto ">
          <h3 class="lg:text-4xl xsm:text-lg lsm:text-2xl font-bold text-gray-700 text-center" id="textoPrincipal">
            {{ title }}
          </h3>
        </header>

        <main class="mx-6 my-4">
          <slot/>
        </main>
      </div>
    </div>
    <footer-layout/>
  </div>
</template>

<script>
import FooterLayout from "./FooterLayout";

export default {
  name: 'AuthLayout',
  components: {FooterLayout},
  props: ["title"]
}
</script>

<style scoped></style>
