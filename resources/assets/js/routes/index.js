import Vue from 'vue'
import Router from 'vue-router'

// Views
import HomeView from '../components/views/HomeView'

Vue.use(Router)

export default new Router({
    routes: [
        { path: '/', name: 'Home', component: HomeView },

    ]
})