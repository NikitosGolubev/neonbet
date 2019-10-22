export default {
    props: {
        event: {
            type: Object,
            required: true
        }
    },
    computed: {
        getEventType() { return this.event.type; },

        getEventTeam1Name() {return this.event.team1.name;},
        getEventTeam2Name() {return this.event.team2.name;},

        getEventTeam1Logo() {return this.event.team1.logo;},
        getEventTeam2Logo() {return this.event.team2.logo;},

        getEventTeam1Coef() {return this.coef(this.event.betting.coef1);},
        getEventTeam2Coef() {return this.coef(this.event.betting.coef2);},

        getEventMoneyBetOnTeam1() {return this.moneyBet(this.event.betting.money1);},
        getEventMoneyBetOnTeam2() {return this.moneyBet(this.event.betting.money2);},

        getEventBetPlaceDate() {return this.event.betting.placedAt;},

        getEventGameLogo() {return this.event.game.logo;},

        getEventBetCoefficient() {
            let result;

            if (this.event.betting.userChoice === 1) {
                result = this.event.betting.coef1;
            }
            else result = this.event.betting.coef2;

            return this.coef(result);
        },

        getEventBetSum() {return this.event.betting.userBetSum;},

        getEventWinnerNum() {
            if (this.isWinner(1)) return 1;
            if (this.isWinner(2)) return 2;

            return 0;
        },

        getEventUserChoice() {return this.event.betting.userChoice;},

        isUserBetWin() {return this.isTeamWon(this.getEventUserChoice);},
        isUserBetLose() {return this.isTeamLost(this.getEventUserChoice);},
        isUserBetReturned() {return (this.event.endDate && !this.event.winnerId);},
        isEventLive() { return this.event.status === 'live'; },
        isEventUpcoming() { return this.event.status === 'upcoming'; },
    },
    methods: {
        isTeamWon(teamNum) {
            const teamKey = `team${teamNum}`;
            const teamId = this.event[teamKey]['id'];

            return teamId === this.event.winnerId;
        },

        isTeamLost(teamNum) {
            return (this.event.winnerId && !this.isTeamWon(teamNum));
        },

        isUserChosenTeam(teamNum) {
            return this.getEventUserChoice === teamNum;
        },

        coef(intCoef, makeCoef = null) {
            if (!makeCoef) return coefficient(intCoef);

            return makeCoef(intCoef);
        },

        moneyBet(sum) {
            return sum+' RUB';
        }
    }
};

function coefficient(int) {
    return int+"%";
}
