<template>
  <div>
    <notifications position="top right"/>
    <navbar-layout @open-menu-mobile="() => openMenuMobile = !openMenuMobile"/>
    <top-bar />
    <top-bar-mobile :open-menu-mobile="openMenuMobile" />
    <main class="flex flex-col md:p-10 p-4">
      <slot/>
    </main>
    <footer-layout/>
  </div>
</template>

<script>
import NavbarLayout from "./NavbarLayout";
import FooterLayout from "./FooterLayout";
import TopBar from "@/components/TopBar";
import TopBarMobile from "@/components/TopBarMobile";

export default {
  name: 'AppLayout',
  components: {TopBar, FooterLayout, NavbarLayout, TopBarMobile},

  data(){
    return{
      openMenuMobile: false
    }
  },
}
</script>

<style scoped></style>
