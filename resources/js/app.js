
import './bootstrap'

import Vue from 'vue'
import Vuex from 'vuex'
import StoreData from './store'
import {routes} from './routes'
import VueRouter from 'vue-router'
import vuetify from './plugins/vuetify'
import App from './App.vue'

Vue.use(VueRouter)
Vue.use(Vuex)

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
  routes,
  mode:'history'
});

const app = new Vue({
  router,
  store,
  vuetify,
  el: '#app',
  render: (h) => h(App)
});