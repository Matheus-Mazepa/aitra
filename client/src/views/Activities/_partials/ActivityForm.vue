<template>
  <form class="px-1" @submit.prevent="$emit('submit', activity)">
    <div class="bg-white">
      <div class="md:grid md:grid-cols-2">
        <div class="form-group md:ml-5 col-span-2">
          <v-input
            label="Nome"
            id="name"
            :error="getError('activity.name')"
            v-model="activity.name"
            type="text"
            title="Digite o nome do projeto"/>
        </div>
      </div>

      <div class="form-group md:ml-5 col-span-2">
        <label class="block text-black text-base font-bold mt-2 mb-2">
          Data de inicio
          <span class="text-sm text-red-500 text-muted ml-1">*</span>
        </label>
        <div class="w-full">
          <date-picker v-model="activity.startDate" format="DD/MM/YYYY"></date-picker>
        </div>
        <span class="text-sm text-red-500 text-muted" v-if="getError('activity.start_date')">{{ getError('activity.start_date') }}</span>
      </div>

      <div class="form-group md:ml-5 col-span-2">
        <label class="block text-black text-base font-bold mt-2 mb-2">
          Data de término
          <span class="text-sm text-red-500 text-muted ml-1">*</span>
        </label>
        <div class="w-full">
          <date-picker v-model="activity.finishDate" format="DD/MM/YYYY"></date-picker>
        </div>
        <span class="text-sm text-red-500 text-muted" v-if="getError('activity.finish_date')">{{ getError('activity.finish_date') }}</span>
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
        activity: {
          name: "",
          startDate: undefined,
          finishDate: undefined
        }
      }
    },

    computed: {
      activityCreated() {
        return this.$store.getters["activities/activity"];
      },

      errors() {
        return this.$store.getters["activities/errors"];
      }
    },

    methods: {
      createDateFromLocalFormart(date) {
        const splittedDateSplited = date.split('/');
        return new Date(`${splittedDateSplited[1]}/${splittedDateSplited[0]}/${splittedDateSplited[2]}`);
      },

      getError(error) {
        return this.errors[error] ? this.errors[error][0] : undefined;
      }
    },

    watch: {
      activityCreated(activityCreated) {
        this.activity.name = activityCreated.name;
        this.activity.startDate = this.createDateFromLocalFormart(activityCreated.start_date);
        this.activity.finishDate = this.createDateFromLocalFormart(activityCreated.finish_date);
      }
    }
  }
</script>