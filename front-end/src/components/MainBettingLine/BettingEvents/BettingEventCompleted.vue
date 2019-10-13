<template>
    <betting-event-wrap :event="event">
        <template #firstRowMiddle>
            <v-score :score1="event.finalScore.team1" :score2="event.finalScore.team2" />
        </template>

        <template #secondRowTeam1>
            <div :class="badgeClasses(1)"></div>
        </template>

        <template #secondRowMiddle>
            <event-time-data :date-time="event.startDate" />
        </template>

        <template #secondRowTeam2>
            <div :class="badgeClasses(2)"></div>
        </template>

        <template #thirdRowTeam1>
            <betting-event-result-determination :team="1" :event="event" />
        </template>

        <template #thirdRowTeam2>
            <betting-event-result-determination :team="2"  :event="event" />
        </template>
    </betting-event-wrap>
</template>

<script>
    import BettingEventWinnerDetermination from './mixins/betting-event-result-determination';
    import BettingEventWrap from "./BettingEventWrap";
    import EventTimeData from "../../EventTimeData/EventTimeData";
    import VScore from "../../ui/scores/VScore";
    import BettingEventResultDetermination from "./BettingEventResultDetermination";

    export default {
        name: "BettingEventCompleted",
        components: {BettingEventResultDetermination, VScore, EventTimeData, BettingEventWrap},
        mixins: [BettingEventWinnerDetermination],
        methods: {
            badgeClasses(teamNum) {
                if (this.isWinner(teamNum)) {
                    return ['trophy', 'betting-event__winner'];
                } else {
                    return ['betting-event__loser'];
                }
            }
        }
    }
</script>
