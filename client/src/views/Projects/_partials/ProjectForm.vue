<template>
  <form class="px-1" @submit.prevent="$emit('submit', project)">
    <div class="bg-white">
      <div class="md:grid md:grid-cols-2">
        <div class="form-group md:ml-5 col-span-2">
          <v-input
            label="Nome"
            id="name"
            required
            v-model="project.name"
            type="text"
            title="Digite o nome do projeto"/>
        </div>
        <div class="form-group md:ml-5 col-span-2">
          <label class="block text-black text-base font-bold mt-2 mb-2">
            Data de inicio
            <span class="text-sm text-red-500 text-muted ml-1">*</span>
          </label>
          <date-picker v-model="project.startDate" format="DD/MM/YYYY"></date-picker>
        </div>

        <div class="form-group md:ml-5 col-span-2">
          <label class="block text-black text-base font-bold mt-2 mb-2">
            Data de término
            <span class="text-sm text-red-500 text-muted ml-1">*</span>
          </label>
          <date-picker v-model="project.finishDate" format="DD/MM/YYYY"></date-picker>
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
  import DatePicker from 'vue2-datepicker';
  import 'vue2-datepicker/index.css';
  import 'vue2-datepicker/locale/pt-br';

  export default {
    components: {
      'v-input': Input,
      'v-button': Button,
      DatePicker
    },

    data() {
      return {
        project: {
          name: '',
          startDate: undefined,
          finishDate: undefined,
        }
      }
    },

    computed: {
      projectCreated() {
        return this.$store.getters["projects/project"];
      }
    },

    methods: {
      createDateFromLocalFormart(date) {
        const splittedDateSplited = date.split('/');
        return new Date(`${splittedDateSplited[1]}/${splittedDateSplited[0]}/${splittedDateSplited[2]}`);
      }
    },

    watch: {
      projectCreated(projectCreated) {
        this.project.name = projectCreated.name;
        this.project.startDate = this.createDateFromLocalFormart(projectCreated.start_date);
        this.project.finishDate = this.createDateFromLocalFormart(projectCreated.finish_date);
      }
    }
  }
</script>