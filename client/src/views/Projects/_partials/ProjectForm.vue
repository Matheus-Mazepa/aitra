<template>
  <form class="px-1" @submit.prevent="$emit('submit', project)">
    <div class="bg-white">
      <div class="md:grid md:grid-cols-2">
        <div class="form-group md:ml-5 col-span-2">
          <v-input
            label="Nome"
            id="name"
            v-model="project.name"
            type="text"
            title="Digite o nome do projeto"/>
        </div>
      </div>

      <div
        class="flex md:justify-evenly justify-between md:ml-5 form-group mt-3" >
        <div>
          <v-button type="submit">Enviar</v-button>
        </div>
      </div>
    </div>
  </form>
</template>
<script>
  import Input from "@/components/Input";
  import Button from "@/components/Button";

  export default {
    components: {
      'v-input': Input,
      'v-button': Button
    },
    data() {
      return {
        project: {
          name: "",
        }
      }
    },
  }
</script>