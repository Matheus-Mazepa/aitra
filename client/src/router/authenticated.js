import Home from '@/views/Home.vue'
import ProjectsIndex from '@/views/Projects/Index.vue'
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
    },
  },
];

export default Authenticated
