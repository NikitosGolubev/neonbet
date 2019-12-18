export default [
    {
        name: 'home',
        path: '/',
        component: () => import('../../views/common/Home/Home.vue')
    },
    {
        name: 'register',
        path: '/register',
        component: () => import('../../views/common/Auth/Register/Register.vue')
    },
    {
        name: 'login',
        path: '/login',
        component: () => import('../../views/common/Auth/Login/Login.vue')
    },
    {
        name: 'forgetPassword',
        path: '/forget-password',
        component: () => import('../../views/common/Auth/ForgetPassword/ForgetPassword.vue')
    },
    {
        name: 'passwordRecovery',
        path: '/password-recovery',
        component: () => import('../../views/common/Auth/PasswordRecovery/PasswordRecovery.vue')
    },
    {
        name: 'success',
        path: '/success',
        component: () => import('../../views/common/Service/OperationStatuses/Success.vue')
    },
    {
        name: 'failure',
        path: '/failure',
        component: () => import('../../views/common/Service/OperationStatuses/Failure.vue')
    },
    {
        name: 'article',
        path: '/article',
        component: () => import('../../views/common/Article/Article.vue')
    },
    {
        name: 'support',
        path: '/support',
        component: () => import('../../views/common/Support/Support.vue')
    },
    {
        name: 'notFound',
        path: '*',
        component: () => import('../../views/common/Service/HttpResponse/HttpResponse.vue')
    },
];
