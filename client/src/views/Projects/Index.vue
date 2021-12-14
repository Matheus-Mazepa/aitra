<template>
  <app-layout>
    <data-table :headers="headers" :items="projects"></data-table>
  </app-layout>
</template>

<script>
  import AppLayout from "@/layouts/AppLayout";
  import DataTable from "../../components/DataTable";
  import {mapActions} from "vuex";

  export default {
    name: 'Index',

    components: {DataTable, AppLayout},

    data() {
      return {
        headers: [
          { title: '#', value: 'id' },
          { title: 'Nome', value: 'name' },
          { title: 'Data de inicio', value: 'start_date' },
          { title: 'Data de fim', value: 'finish_date' }
        ],
      }
    },

    mounted() {
      this.fetchProjects();
    },

    computed: {
      projects() {
        return this.$store.getters["projects/projects"];
      }
    },

    methods: {
      ...mapActions({
        fetchProjects: "projects/fetchProjects",
      }),
    }
  }
</script>
