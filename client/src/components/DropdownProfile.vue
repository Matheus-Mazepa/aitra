<template>
  <div class="group inline-block">
    <button
      type="button"
      class="flex text-sm rounded-full focus:outline-none transform transition duration-500 ease-in-out"
      id="user-menu-button">
     User
    </button>
    <ul
      class="origin-left absolute right-0 mt-1 w-44 rounded-md shadow-lg py-1 bg-white focus:outline-none divide-y divide-gray-200 transform scale-0 group-hover:scale-100 transition duration-500 ease-in-out">
      <li class="rounded-sm text-left w-full">
        <router-link
          to="/"
          class="items-menu"
          role="menuitem"
          id="my-data-0">
          Meus dados
        </router-link>
      </li>

      <li class="rounded-sm text-left w-full">
        <router-link
          to="/login"
          class="items-menu"
          role="menuitem"
          id="logout-0">
          Sair
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'DropdownProfile'
}
</script>

<style scoped>

.items-menu {
  @apply block text-sm py-2 px-4 text-black transition duration-200 hover:bg-green-700 hover:text-white
}

li > ul {
  transform: translatex(100%) scale(0)
}

li:hover > ul {
  transform: translatex(101%) scale(1)
}

li > button img {
  transform: rotate(-90deg)
}

li:hover > button img {
  transform: rotate(-270deg)
}

.group:hover .group-hover\:scale-100 {
  transform: scale(1)
}

.group:hover .group-hover\:-rotate-180 {
  transform: rotate(180deg)
}

.scale-0 {
  transform: scale(0)
}
</style>
