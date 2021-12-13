<template>
  <nav class="w-full flex relative p-4 shadow shadow-lg hidden md:flex">
    <div class="px-4 text-lg font-bold text-gray-500 tracking-wider">
      <router-link :to="{name: 'projects'}">
        <user-icon class="mr-1"/>
        Projetos
      </router-link>
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
