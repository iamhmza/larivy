import Vue from 'vue';
import Vuetify from 'vuetify';
//window.Vue = require('vue');

import router from './router';
import store from './store';
// root component
import App from './App.vue';

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key =>
//     Vue.component(
//         key
//             .split('/')
//             .pop()
//             .split('.')[0],
//         files(key).default
//     )
// );

// Vue.component(
//     'example-component',
//     require('./components/ExampleComponent.vue').default
// );
