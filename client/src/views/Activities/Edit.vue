<template>
  <app-layout>
    <h1>Editar atividate</h1>
    <ActivityForm @submit="payload => editActivity({payload: payload, projectId: this.$route.params.project_id, id: $route.params.id})"></ActivityForm>
  </app-layout>
</template>

<script>
  import AppLayout from "@/layouts/AppLayout";
  import {mapActions} from "vuex";
  import ActivityForm from "./_partials/ActivityForm";

  export default {
    name: 'Edit',

    components: {AppLayout, ActivityForm},

    mounted() {
      this.fetchActivity({projectId: this.$route.params.project_id, id: this.$route.params.id});
    },

    methods: {
      ...mapActions({
        editActivity: "activities/editActivity",
        fetchActivity: "activities/fetchActivity",
      }),
    }
  }
</script>
