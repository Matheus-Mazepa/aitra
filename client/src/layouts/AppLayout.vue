<template>
  <div>
    <navbar/>

    <main class="flex flex-col md:p-36 p-4">
      <slot/>
    </main>
    <footer-layout/>
  </div>
</template>

<script>
import FooterLayout from "./FooterLayout";
import Navbar from "./_partials/Navbar";

export default {
  name: 'AppLayout',
  components: {FooterLayout, Navbar},

  data(){
    return{
      openMenuMobile: false
    }
  },
}
</script>

<style scoped></style>
