export default [
    {
        name: 'cabinet',
        path: '/cabinet',
        component: () => import('../../views/common/Cabinet/Profile/Profile.vue')
    },
    {
        name: 'cabinet.deposit',
        path: '/cabinet/deposit',
        component: () => import('../../views/common/Cabinet/MoneyTransactions/Deposit/Deposit.vue')
    },
    {
        name: 'cabinet.withdrawal',
        path: '/cabinet/withdrawal',
        component: () => import('../../views/common/Cabinet/MoneyTransactions/Withdrawal/Withdrawal.vue')
    },
    {
        name: 'cabinet.betting-history',
        path: '/cabinet/betting-history',
        component: () => import('../../views/common/Cabinet/BettingHistory/BettingHistory.vue')
    },
];
