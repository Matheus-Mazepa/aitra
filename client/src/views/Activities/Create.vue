<template>
  <app-layout>
      <h1>Criar atividade</h1>
      <ProjectForm></ProjectForm>
  </app-layout>
</template>

<script>
  import AppLayout from "@/layouts/AppLayout";
  import ProjectForm from "./_partials/ActivityForm";

  export default {
    name: 'Create',

    components: {ProjectForm, AppLayout},
  }
</script>
