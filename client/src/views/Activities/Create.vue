<template>
  <app-layout>
      <h1>Criar atividade</h1>
      <ProjectForm @submit="payload => createActivity({payload: payload, projectId: $route.params.project_id})"></ProjectForm>
  </app-layout>
</template>

<script>
  import AppLayout from "@/layouts/AppLayout";
  import ProjectForm from "./_partials/ActivityForm";
  import {mapActions} from "vuex";

  export default {
    name: 'Create',

    components: {ProjectForm, AppLayout},

    methods: {
      ...mapActions({
        createActivity: "activities/createActivity",
      }),
    }
  }
</script>
