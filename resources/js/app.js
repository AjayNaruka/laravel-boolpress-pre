require('./bootstrap');
window.Vue = require('vue');

import App from './App.vue';
import router from './routes';
const app = new Vue({
    el: '#app',
    render: h => h(App),
    router,
});

console.log('guest');
