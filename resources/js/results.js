require('./bootstrap');

window.Vue = require('vue');

import VModal from 'vue-js-modal';

Vue.use(VModal, {dynamic: true, injectModalsContainer: true});

// componentes
Vue.component('list', require('./components/results/App.vue').default);

const app = new Vue({
    el: '#app',
});