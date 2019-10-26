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
    },
    {
      name: 'register',
      path: '/register',
      component: () => import('../views/common/Auth/Register/Register.vue')
    },
    {
      name: 'login',
      path: '/login',
      component: () => import('../views/common/Auth/Login/Login.vue')
    },
    {
      name: 'forgetPassword',
      path: '/forget-password',
      component: () => import('../views/common/Auth/ForgetPassword/ForgetPassword.vue')
    },
    {
      name: 'passwordRecovery',
      path: '/password-recovery',
      component: () => import('../views/common/Auth/PasswordRecovery/PasswordRecovery.vue')
    },
    {
      name: 'notFound',
      path: '/404',
      component: () => import('../views/common/Service/HttpResponse/HttpResponse.vue')
    },
    {
      name: 'success',
      path: '/success',
      component: () => import('../views/common/Service/OperationStatuses/Success.vue')
    },
    {
      name: 'failure',
      path: '/failure',
      component: () => import('../views/common/Service/OperationStatuses/Failure.vue')
    },
    {
      name: 'article',
      path: '/article',
      component: () => import('../views/common/Article/Article.vue')
    },
    {
      name: 'support',
      path: '/support',
      component: () => import('../views/common/Support/Support.vue')
    }
  ]
});
