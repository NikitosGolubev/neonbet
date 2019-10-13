<template>
    <betting-event-wrap :event="event">
        <template #firstRowMiddle>
            <live-sensor :is-live="false" :broadcast-url="event.twitchLink" />
        </template>

        <template #secondRowTeam1>
            <v-coefficient class="text_black">{{team1Coef}}</v-coefficient>
        </template>

        <template #secondRowMiddle>
            <event-time-data :date-time="event.startDate" />
        </template>

        <template #secondRowTeam2>
            <v-coefficient class="text_black">{{team2Coef}}</v-coefficient>
        </template>

        <template #thirdRowTeam1>
            <v-button-outline-gradient-fillable size="sm">
                Поставить
            </v-button-outline-gradient-fillable>
        </template>

        <template #thirdRowTeam2>
            <v-button-outline-gradient-fillable size="sm">
                Поставить
            </v-button-outline-gradient-fillable>
        </template>
    </betting-event-wrap>
</template>

<script>
    import BettingEventMixin from './mixins/betting-event';
    import BettingEventWrap from "./BettingEventWrap";
    import EventTimeData from "../../EventTimeData/EventTimeData";
    import LiveSensor from "../../LiveSensor/LiveSensor";
    import VCoefficient from "../../ui/coefficients/VCoefficient";
    import VButtonOutlineGradientFillable from "../../ui/buttons/VButtonOutlineGradientFillable";

    export default {
        name: "BettingEventUpcoming",
        components: {VButtonOutlineGradientFillable, VCoefficient, LiveSensor, EventTimeData, BettingEventWrap},
        mixins: [BettingEventMixin]
    }
</script>

<style>

</style>
