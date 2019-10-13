import BettingEventMixin from './betting-event';

export default {
    mixins: [BettingEventMixin],
    computed: {
        winnerNum() {
            if (this.isWinner(1)) return 1;
            if (this.isWinner(2)) return 2;

            return 0;
        }
    },
    methods: {
        isWinner(teamNum) {
            const teamKey = `team${teamNum}`;
            const teamId = this.event[teamKey]['id'];

            return teamId === this.event.winnerId;
        }
    }
}
