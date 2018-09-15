require('./bootstrap');
import Vue from 'vue'
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import App from './components/App'
import { routes } from './routes/index.js'
import StoreData from './store';
import { initialize } from './helpers/general';
import vueHeadful from 'vue-headful';
// import autocomplete from './components/views/autocomplete.vue';



Vue.use(VueRouter);
Vue.use(Vuex);
Vue.component('vue-headful', vueHeadful);
// Vue.component('autocomplete', autocomplete);

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
    routes,
    mode: 'history'
});

initialize(store, router);

var vm = new Vue({
    router,
    store,
    el: '#app',
    render: h => h(App)
});