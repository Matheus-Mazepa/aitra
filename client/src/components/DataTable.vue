<template>
  <div class="flex flex-col mt-8">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
        <v-table class="min-w-full">
          <thead>
          <th v-for="(header, index) in headers" :key="`header-${index}`">
            {{ header.title }}
          </th>
          </thead>
          <tbody>
          <tr v-for="(item, index) in items" :key="`mapped-item-${index}`">
            <td v-for="(header, index) in headers" :key="`table-item-${index}`">
              {{ item[header.value] }}
            </td>
            <td v-if="hasActions" class="action-column">
              <slot name="action" :item="item.item"/>
            </td>
          </tr>
          </tbody>
        </v-table>
      </div>
    </div>
  </div>
</template>
<script>
  import VTable from "./Table";
  export default {
    components: {VTable},

    props: {
      headers: {
        type: Array,
        required: true
      },

      items: {
        type: Array,
        required: true
      },

      hasActions: {
        type: Boolean,
        required: false,
        default: () => false
      }
    },

    computed: {
      mappedItems () {
        return this.items.map((item) => {
          return {
            tableItem: this.headers.map((header) => item[header.value])
          }
        })
      }
    }
  }
</script>