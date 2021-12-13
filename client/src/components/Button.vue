<template>
  <button
    v-bind="{...$props, ...$attrs}"
    :class="setColorClass()"
    class="w-full border border-solid rounded font-sans-bold px-6 py-2 mr-5">
    <slot/>
  </button>
</template>

<script>
export default {
  name: 'v-button',
  props: {
    color: String,
  },
  methods: {
    setColorClass() {
      const color = (this.color) ? this.color : 'gray';
      const colorText = (this.color === 'white') ? 'text-dark' : 'text-white';
      return `bg-${color}-600 ${colorText} hover:bg-${color}-800 hover:text-${colorText} border-${color}-500`;
    }
  }
};
</script>
