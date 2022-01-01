<template>
  <app-layout>
    <router-link class="bg-green-500 rounded w-1/3 p-4 text-white font-bold text-center" :to="{name: 'activities.create', params: { id: $route.params.id}}"><edit-icon /> Adicionar atividade</router-link>

    <data-table :headers="headers" :items="activities" :hasActions="true">
      <template #action="{ item }">
        <div class="flex">
          <div class="hover:text-green-600 lsm:p-1 lsm:mx-0.5 ease-linear transition-all duration-150 cursor-pointer"
               title="Editar" >
            <router-link :to="{name: 'activities.edit', params: {project_id: $route.params.project_id, id: item.id}}"><edit-icon /></router-link>
          </div>
          <div class="hover:text-green-600 lsm:p-1 lsm:mx-0.5 ease-linear transition-all duration-150 cursor-pointer"
               v-if="item.is_finished === 'Não'"
               title="Definir como finalizada" @click="setAsFinished({projectId: $route.params.project_id, id: item.id})">
            <check-icon />
          </div>
        </div>
      </template>
    </data-table>
  </app-layout>
</template>

<script>
  import AppLayout from "@/layouts/AppLayout";
  import DataTable from "../../components/DataTable";
  import {mapActions} from "vuex";
  import EditIcon from 'vue-material-design-icons/Pencil';
  import CheckIcon from 'vue-material-design-icons/Check';

  export default {
    name: 'Index',

    components: {DataTable, AppLayout, EditIcon, CheckIcon},

    data() {
      return {
        headers: [
          { title: '#', value: 'id' },
          { title: 'Nome', value: 'name' },
          { title: 'Data de inicio', value: 'start_date' },
          { title: 'Data de fim', value: 'finish_date' },
          { title: 'Finalizada', value: 'is_finished' }
        ],
      }
    },

    mounted() {
      this.fetchActivities(this.$route.params.project_id);
    },

    computed: {
      activities() {
        return this.$store.getters["activities/activities"];
      }
    },

    methods: {
      ...mapActions({
        fetchActivities: "activities/fetchActivities",
        setAsFinished: "activities/setAsFinished",
      })
    }
  }
</script>
