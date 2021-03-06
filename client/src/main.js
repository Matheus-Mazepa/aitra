import Vue from 'vue'
import App from './App.vue'
import './assets/css/app.css'
import VueRouter from 'vue-router'
import router from './router'
import axios from 'axios'
import store from './store'
import Notifications from 'vue-notification'

Vue.prototype.$http = axios;

axios.defaults.withCredentials = true;

axios.get('http://localhost:8081/sanctum/csrf-cookie');

axios.defaults.baseURL = 'http://localhost:8081/api';

Vue.config.productionTip = false;

window.router = router;

Vue.use(VueRouter);
Vue.use(Notifications);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
