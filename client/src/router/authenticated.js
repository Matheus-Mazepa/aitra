import Home from '@/views/Home.vue';
import ProjectsIndex from '@/views/Projects/Index.vue';
import ProjectsCreate from '@/views/Projects/Create.vue';
import ProjectsEdit from '@/views/Projects/Edit.vue';

import ActivitiesIndex from '@/views/Activities/Index.vue';
import ActivitiesCreate from '@/views/Activities/Create.vue';
import ActivitiesEdit from '@/views/Activities/Edit.vue';

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
    path: '/projetos/:project_id/atividades',
    name: 'activities',
    component: ActivitiesIndex,
    meta: {
      middleware: auth,
    },
  },
  {
    path: '/projetos/:project_id/atividades/criar',
    name: 'activities.create',
    component: ActivitiesCreate,
    meta: {
      middleware: auth,
    },
  },
  {
    path: '/projetos/:project_id/atividades/:id/editar',
    name: 'activities.edit',
    component: ActivitiesEdit,
    meta: {
      middleware: auth,
    },
  },
];

export default Authenticated
