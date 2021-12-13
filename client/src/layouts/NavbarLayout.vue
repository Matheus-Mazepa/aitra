<template>
  <nav class="relative bg-green-700 w-full z-10 p-2">
    <div class="w-full mx-auto items-center flex justify-between md:px-5">
      <router-link class="hidden md:block" to="/">
        Home
      </router-link>

      <div class="md:hidden transform transition duration-500 ease-in-out">
        <button class="text-white" @click="$emit('open-menu-mobile')">
          <svg
            class="w-6 h-6"
            fill="none"
            stroke-linecap="round"
            stroke-width="2"
            stroke="currentColor">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <div class="relative">
        <dropdown-profile/>
      </div>
    </div>
  </nav>
</template>

<script>
import DropdownProfile from "@/components/DropdownProfile";

export default {
  name: 'NavbarLayout',
  components: {DropdownProfile},

  methods: {
    login() {
      this.$router.replace("login")
    }
  }
}
</script>

