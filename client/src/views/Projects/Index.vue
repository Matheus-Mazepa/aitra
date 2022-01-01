<template>
  <app-layout>
    <router-link class="bg-green-500 rounded w-1/3 p-4 text-white font-bold text-center" :to="{name: 'projects.create'}"><edit-icon /> Adicionar projeto</router-link>

    <data-table :headers="headers" :items="projects" :hasActions="true">
      <template #action="{ item }">
        <div class="flex">
          <div class="hover:text-green-600 lsm:p-1 lsm:mx-0.5 ease-linear transition-all duration-150 cursor-pointer"
               title="Editar" >
            <router-link :to="{name: 'projects.edit', params: { id: item.id}}"><edit-icon /></router-link>
          </div>
          <div class="hover:text-green-600 lsm:p-1 lsm:mx-0.5 ease-linear transition-all duration-150 cursor-pointer"
               title="Ver atividades do projeto" >
            <router-link :to="{name: 'activities', params: { project_id: item.id}}"><calendar-clock-icon /></router-link>
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
  import CalendarClockIcon from 'vue-material-design-icons/CalendarClock';

  export default {
    name: 'Index',

    components: {DataTable, AppLayout, EditIcon, CalendarClockIcon},

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
