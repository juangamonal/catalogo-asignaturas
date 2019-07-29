require('./bootstrap');

window.Vue = require('vue');

// componentes
Vue.component('search', require('./components/seeker/App.vue').default);

const app = new Vue({
    el: '#app',
});