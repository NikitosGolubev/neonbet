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
    },
    {
      name: 'deposit',
      path: '/cabinet/deposit',
      component: () => import('../views/common/Cabinet/MoneyTransactions/Deposit/Deposit.vue')
    },
    {
      name: 'withdrawal',
      path: '/cabinet/withdrawal',
      component: () => import('../views/common/Cabinet/MoneyTransactions/Withdrawal/Withdrawal.vue')
    },
    {
      name: 'betting-history',
      path: '/cabinet/betting-history',
      component: () => import('../views/common/Cabinet/BettingHistory/BettingHistory.vue')
    }
  ]
});
