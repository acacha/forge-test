
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component(
  'passport-clients',
  require('./components/passport/Clients.vue')
);

Vue.component(
  'passport-authorized-clients',
  require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
  'passport-personal-access-tokens',
  require('./components/passport/PersonalAccessTokens.vue')
);

//TODO: Needed? Now using vuex remove?
import VueEvents from 'vue-events'
Vue.use(VueEvents)

import Vuex from 'vuex';
Vue.use(Vuex);

require('acacha-forge');

const debug = process.env.NODE_ENV !== 'production'
const store = new Vuex.Store({strict: debug});

const app = new Vue({
  el: '#app',
  store,
});
