<template>
  <div class="w-full">
    <label class="block text-black text-base font-bold mt-2 mb-2">
      {{ label }}
      <span class="text-sm text-red-500 text-muted ml-1" v-if="required">*</span>
    </label>

    <input
      :class="{'border border-red-500' : error }"
      v-bind="{...$props, ...$attrs}"
      @input="$emit('input', $event.target.value)"
      class="shadow appearance-none border rounded w-full py-2 px-3 text-base text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    <span class="text-sm text-red-500 text-muted" v-if="error">{{ error }}</span>
  </div>
</template>

<script>
export default {
  name: 'v-input',
  props: ["label", "required", "error"]
}
</script>

