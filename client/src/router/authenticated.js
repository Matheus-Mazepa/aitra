import Home from '@/views/Home.vue'
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
];

export default Authenticated
