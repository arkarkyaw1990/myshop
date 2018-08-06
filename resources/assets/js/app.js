
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Product from './components/Product.vue';

import VueLazyLoad from 'vue-lazyload';

Vue.use(VueLazyLoad, {
    preload:0.3,
    loading: 'images/loading.gif',
    attempt:1
});

const app = new Vue({
    el: '#page',
    components: {Product}
});
