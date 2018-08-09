require('./bootstrap');

import Vue from 'vue'
import App from './components/App'
import router from './routes/index.js'

var vm = new Vue({
    router,
    el: '#app',
    render: h => h(App)
})