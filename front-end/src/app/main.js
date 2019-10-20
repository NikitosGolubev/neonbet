import Vue from 'vue'
import App from './App.vue'
import router from '../router/router'
import store from '../store/store'
import VueObserveVisibility from 'vue-observe-visibility'

Vue.use(VueObserveVisibility);

// Components
Vue.component('main-scroll', require('../components/MainScroll/MainScroll').default);

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  render: h => h(App),
  data: {
    breakpoints: {
      xxs: 320,
      xs: 515,
      sm: 769,
      md: 993,
      lg: 1199,
      xl: Infinity
    }
  }
}).$mount('#app');
