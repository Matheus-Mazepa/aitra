<template>
  <app-layout>
      <h1>Criar projeto</h1>
      <ProjectForm @submit="payload => createProject(payload)"></ProjectForm>
  </app-layout>
</template>

<script>
  import AppLayout from "@/layouts/AppLayout";
  import ProjectForm from "./_partials/ProjectForm";
  import {mapActions} from "vuex";

  export default {
    name: 'Create',

    components: {ProjectForm, AppLayout},

    methods: {
      ...mapActions({
        createProject: "projects/createProject",
      }),
    }
  }
</script>
