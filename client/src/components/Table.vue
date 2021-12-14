<template>
  <table
    class="aitra-table"
    v-bind="{...$props, ...$attrs}"
  >
    <slot></slot>
  </table>
</template>

<script>
  export default {
    name: 'v-table',
  };
</script>

<style>
  .aitra-table {
    @apply w-full overflow-hidden;
    @apply rounded text-left;
  }

  .aitra-table thead th {
    @apply px-6 py-3 text-xs font-medium leading-4 tracking-wider;
    @apply text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50;
  }

  .aitra-table thead th[sortable="sortable"] {
    @apply cursor-pointer hover:text-black;
  }

  .aitra-table tbody td {
    @apply px-6 py-4 border-b;
    @apply border-gray-200 whitespace-nowrap;
    @apply text-sm leading-5 text-gray-900;
  }
</style>