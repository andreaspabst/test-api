/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

/**------------- Load project components ------------**/
const req = require.context('./components/', true, /\.vue$/i);
req.keys().map(key => {
    const name = key.match(/\/([\w/_-]+)/)[1].replace(/[\/_]/g, '-');
    console.debug('load component ' + name);
    const component = req(key);
    return Vue.component(name, component.default);
});

/**
 * Here we will import
 */
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
