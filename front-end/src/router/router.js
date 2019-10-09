import Vue from 'vue';
import Router from 'vue-router';

import MainLayout from '../layouts/MainLayout/MainLayout';

Vue.use(Router);

export default new Router({
  'mode': 'history',
  'base': process.env.BASE_URL,

  routes: [
    {
      path: '/',
      component: MainLayout,
      children: [
        {
          name: 'home',
          path: '',
          components: {
            default: () => import('../views/common/Home/Home.vue'),
            pageAfter: () => import('../components/SelectedBets/SelectedBets')
          }
        }
      ]
    }
  ]
});
