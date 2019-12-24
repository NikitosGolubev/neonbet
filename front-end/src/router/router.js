import Vue from 'vue';
import Router from 'vue-router';

// routes
import main from './route-groups/main';
import cabinet from './route-groups/cabinet';
import admin from './route-groups/admin';

Vue.use(Router);

export default new Router({
  'base': process.env.BASE_URL,

  routes: [
      ...main,
      ...cabinet,
      ...admin
  ]
});
