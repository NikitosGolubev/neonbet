import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
  'mode': 'history',
  'base': process.env.BASE_URL,

  routes: [
    {
      name: 'home',
      path: '/',
      component: () => import('../views/common/Home/Home.vue')
    },
    {
      name: 'cabinet',
      path: '/cabinet',
      component: () => import('../views/common/Cabinet/Profile/Profile.vue')
    }
  ]
});
