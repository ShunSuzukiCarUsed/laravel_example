import './bootstrap'
import Vue from 'vue'

Vue.component('example-component',require('./components/Sample.vue').default);

const app = new Vue({
    el: '#app',
});
