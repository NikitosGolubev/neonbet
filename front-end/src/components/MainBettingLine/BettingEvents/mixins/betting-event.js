export default {
    props: {
        event: {
            type: Object,
            required: true
        }
    },
    computed: {
        team1Coef() {
            return this.coefficient(this.event.betting.coef1);
        },

        team2Coef() {
            return this.coefficient(this.event.betting.coef2);
        },

        moneyBetOnTeam1() {
            return this.moneyBet(this.event.betting.money1);
        },

        moneyBetOnTeam2() {
            return this.moneyBet(this.event.betting.money2);
        }
    },
    methods: {
        coefficient(coef) {
            return coef+'%';
        },

        moneyBet(sum) {
            return sum+' RUB';
        }
    }
};
