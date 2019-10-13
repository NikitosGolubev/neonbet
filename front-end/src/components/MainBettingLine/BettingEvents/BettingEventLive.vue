<template>
    <betting-event-wrap :event="event">
        <template #firstRowMiddle>
            <live-sensor :is-live="true" :broadcast-url="event.twitchLink" />
        </template>

        <template #secondRowTeam1>
            <v-coefficient :is-plain="true" class="text_black">{{team1Coef}}</v-coefficient>
        </template>

        <template #secondRowMiddle>
            <span class="alternative">Событие идёт</span>
        </template>

        <template #secondRowTeam2>
            <v-coefficient :is-plain="true" class="text_black">{{team2Coef}}</v-coefficient>
        </template>

        <template #thirdRowTeam1>
            <div class="balance">
                <div class="balance__content">
                    <span class="text_small-sz">{{ moneyBetOnTeam1 }}</span>
                </div>
            </div>
        </template>

        <template #thirdRowTeam2>
            <div class="balance">
                <div class="balance__content">
                    <span class="text_small-sz">{{ moneyBetOnTeam2 }}</span>
                </div>
            </div>
        </template>
    </betting-event-wrap>
</template>
<script>
    import BettingEventMixin from './mixins/betting-event';
    import BettingEventWrap from "./BettingEventWrap";
    import LiveSensor from "../../LiveSensor/LiveSensor";
    import VCoefficient from "../../ui/coefficients/VCoefficient";

    export default {
        name: "BettingEventLive",
        components: {VCoefficient, LiveSensor, BettingEventWrap},
        mixins: [BettingEventMixin]
    }
</script>

<style scoped>

</style>
