/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import 'bootstrap/dist/css/bootstrap.css'
require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('navcomponent', require('./components/NavComponent.vue').default);
Vue.component('footercomponent', require('./components/FooterComponent.vue').default);

//HOMEPAGE
Vue.component('headerhome', require('./components/homepage/HeaderHome.vue').default);
Vue.component('resturantsectionhome', require('./components/homepage/ResturantSectionHome.vue').default);
Vue.component('partnersectionhome', require('./components/homepage/PartnerSectionHome.vue').default);
Vue.component('infosectionhome', require('./components/homepage/InfosectionHome.vue').default);

//SUCCESS PAGE
Vue.component('successpage', require('./components/success/SuccessPage.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
