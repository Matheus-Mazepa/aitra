<template>
  <nav class="w-full flex relative p-4 justify-center shadow shadow-lg hidden md:flex">
    <div class="px-4 text-lg font-bold text-gray-500 tracking-wider">
      <router-link to=""><user-icon class="mr-1"/>Usuários</router-link>
    </div>
  </nav>
</template>

<script>
import UserIcon from 'vue-material-design-icons/Account';

export default {
  name: 'TopBarLayout',
  components: {
    UserIcon
  }
}
</script>
