import Login from '../components/views/auth/login.vue'
import Register from '../components/views/auth/register.vue'
import Home from '../components/views/home'
import NotFound from '../components/404'

export const routes = [{
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    },
    {
        path: '/',
        name: 'home',
        component: Home
    },
    { path: '*', component: NotFound }
];