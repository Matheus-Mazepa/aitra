<template>
  <app-layout>
    <h1>Editar projeto</h1>
    <ProjectForm @submit="payload => editProject({payload: payload, id: $route.params.id})"></ProjectForm>
  </app-layout>
</template>

<script>
  import AppLayout from "@/layouts/AppLayout";
  import {mapActions} from "vuex";
  import ProjectForm from "./_partials/ProjectForm";

  export default {
    name: 'Edit',

    components: {AppLayout, ProjectForm},

    mounted() {
      this.fetchProject(this.$route.params.id);
    },

    methods: {
      ...mapActions({
        editProject: "projects/editProject",
        fetchProject: "projects/fetchProject",
      }),
    }
  }
</script>
