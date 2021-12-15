import Home from '@/views/Home.vue';
import ProjectsIndex from '@/views/Projects/Index.vue';
import ProjectsCreate from '@/views/Projects/Create.vue';
import ProjectsEdit from '@/views/Projects/Edit.vue';

import ActivitiesIndex from '@/views/Activities/Index.vue';

import auth from "@/middlewares/auth";

const Authenticated = [
  {
    path: '/',
    name: 'home',
    component: Home,
    meta: {
      middleware: auth,
    },
  },
  {
    path: '/projetos',
    name: 'projects',
    component: ProjectsIndex,
    meta: {
      middleware: auth,
    }
  },
  {
    path: '/projetos/criar',
    name: 'projects.create',
    component: ProjectsCreate,
    meta: {
      middleware: auth,
    },
  },
  {
    path: '/projetos/:id/editar',
    name: 'projects.edit',
    component: ProjectsEdit,
    meta: {
      middleware: auth,
    },
  },
  {
    path: '/projetos/:id/atividades',
    name: 'activities',
    component: ActivitiesIndex,
    meta: {
      middleware: auth,
    },
  },
];

export default Authenticated
