require('./bootstrap');
require('lang.js');
import VueLang from '@eli5/vue-lang-js'
import translations from './vue-translations.js';
import Vue from 'vue'

// Components
import './components'

// Plugins
import './plugins'
import { sync } from 'vuex-router-sync'

// Application imports
import router from './router'
import store from './store'
import vuetify from './plugins/vuetify.js'
import VueI18n from 'vue-i18n'


// Sync store with router
sync(store, router)

Vue.config.productionTip = false

Vue.use(VueI18n);

/* eslint-disable no-new */

new Vue({
    vuetify,
    router,
    store,
    
}).$mount('#app')
