<template>
  <nav class="nav-top fixed w-full mb-20">
    <div class="px-2 sm:px-6 lg:px-20">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

          <!-- Mobile menu button-->
          <button
            type="button"
            @click="openMenu = !openMenu"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu"
            aria-expanded="false">
            <i class="fas fa-bars"></i>
          </button>
        </div>

        <!-- Logo -->
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <img src="/logo.png" class="hidden md:block md:w-32" alt="">
          </div>
        </div>

        <dropdown-profile></dropdown-profile>
      </div>
    </div>

    <!-- Mobile menu -->
    <div class="sm:hidden" id="mobile-menu" v-if="openMenu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <router-link to="/"
                     class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                     :class="linkActiveClass('/')"
        >
          <user-icon class="mr-1"/>
          Home
        </router-link>

        <router-link :to="{name: 'projects'}"
                     class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                     :class="linkActiveClass('projects')"
        >
          <user-icon class="mr-1"/>
          Projetos
        </router-link>
      </div>
    </div>

    <topbar/>
  </nav>
</template>

<script>
import Topbar from "./Topbar";
import UserIcon from 'vue-material-design-icons/Account';
import DropdownProfile from "./DropdownProfile";

export default {
  name: 'Navbar',
  components: {DropdownProfile, Topbar, UserIcon},

  data() {
    return {
      openMenu: false,
      openProfile: false
    }
  },


  methods: {
    linkActiveClass(route) {
      return (this.$route.path === route) ? 'bg-gray-900 text-white' : '';
    },
  }
}
</script>

<style scoped>
  .nav-top {
    background-color: #393e46;
  }
</style>
