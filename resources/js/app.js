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

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// These are global vue declarations
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('pie-chart-component', require('./components/PieChartComponent.vue').default);

import PieChartComponent from './components/PieChartComponent.vue'
import HorizontalBarChartComponent from './components/HorizontalBarChartComponent.vue'
import F1TableComponent from './components/F1TableComponent.vue'
import AjaxComponent from './components/AjaxComponent.vue'
import GroupedBarChartComponent from './components/GroupedBarChartComponent.vue'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    components: {
      PieChartComponent,
      HorizontalBarChartComponent,
      F1TableComponent,
      AjaxComponent,
      GroupedBarChartComponent
    }
});
