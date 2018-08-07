require('./bootstrap');

import Vue from 'vue';
import App from './components/App';

var vm = new Vue({
    el: '#app',
    render: h => h(App)
})