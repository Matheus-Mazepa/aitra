import Login from '@/views/auth/Login.vue'
import Reset from '@/views/auth/ResetPassword.vue'

const Unauthenticated = [{
        path: '/login',
        name: 'login',
        component: Login,
    },
    {
        path: '/recuperar-senha',
        name: 'reset',
        component: Reset
    },
];

export default Unauthenticated