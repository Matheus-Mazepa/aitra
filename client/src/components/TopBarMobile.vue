<template>
  <nav
    class="w-full md:hidden relative flex flex-wrap justify-center shadow shadow-lg"
    v-show="openMenuMobile">
    <div class="text-left w-1/2">
      <router-link to="">
        <div
          class="md:p-4 xsm:p-2 text-lg font-bold text-gray-500 tracking-wider hover:bg-green-700 hover:text-white transition duration-150 ease-in-out">
          <user-icon class="mr-3"/>
          Usuários
        </div>
      </router-link>
    </div>
  </nav>
</template>

<script>
import UserIcon from "vue-material-design-icons/Account";

export default {
  name: 'TopBarLayout',
  components: {
    UserIcon,
  },
  props: ["openMenuMobile"]
}
</script>

