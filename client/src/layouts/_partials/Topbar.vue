<template>
  <nav class="bg-white shadow-lg">
    <div class="mx-auto px-2 sm:px-6 lg:px-20">
      <div class="flex justify-between">
        <div class="flex space-x-7">
          <!-- Navbar items -->
          <div class="hidden md:flex items-center space-x-1">
            <router-link to="/"
                         class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
                         :class="linkActiveClass('/')"
            >
              <user-icon class="mr-1"/>
              Home
            </router-link>

            <router-link :to="{name: 'projects'}"
                         class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
                         :class="linkActiveClass('/projetos')">
              <user-icon class="mr-1"/>
              Projetos
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import UserIcon from 'vue-material-design-icons/Account';

export default {
  name: 'Topbar',

  components: {UserIcon},

  data() {
    return {}
  },

  methods: {
    linkActiveClass(route) {
      return (this.$route.path === route) ? 'text-green-500 border-b-4 border-green-500' : '';
    },
  }
}
</script>
