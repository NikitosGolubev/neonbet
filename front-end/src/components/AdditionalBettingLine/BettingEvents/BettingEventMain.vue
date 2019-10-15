<template>
    <div class="row additional-event__body">
        <div class="additional-betting-line__item col-xs-2">
            <div class="additional-event__match-option">
                <event-time-data :date-time="event.startDate" />
            </div>
        </div>

        <div class="additional-betting-line__item col-xs-2">
            <div class="additional-event__match-option">
                <v-game-logo class="additional-event__game-logo" :logo="event.game.logo" />
                <div class="additional-event__option-name">{{ event.type }}</div>
            </div>
        </div>

        <div class="additional-event__match-option_responsive additional-betting-line__item col-xs-11">
            <div>
                <v-game-logo class="additional-betting-line__game-logo" :logo="event.game.logo" />
            </div>
            <event-time-data-simple :date-time="event.startDate" />
        </div>

        <div class="additional-betting-line__item col-xs-11 col-sm-7">
            <div class="additional-event__data">
                <div class="additional-event__team-name additional-event__data-item">
                    {{ event.team1.name }}
                </div>

                <div class="additional-event__team-logo additional-event__data-item">
                     <v-img-bubble-simple :img-path="event.team1.logo" />
                </div>

                <div class="additional-event__data-item text_semibold">
                    <v-coefficient>{{coef(event.betting.coef1)}}</v-coefficient>
                </div>

                <div class="additional-event__data-item">
                    <v-simple-score :is-empty="true" class="muted_bg" />
                </div>

                <div class="additional-event__data-item text_semibold">
                    <v-coefficient>{{coef(event.betting.coef2)}}</v-coefficient>
                </div>

                <div class="additional-event__team-logo additional-event__data-item">
                    <v-img-bubble-simple :img-path="event.team2.logo" />
                </div>

                <div class="additional-event__team-name additional-event__data-item">
                    {{ event.team2.name }}
                </div>
            </div>
        </div>

        <div class="additional-betting-line__item col-xs-1">
            <div>
                <dropdown-gradient-trigger :key-id="dropdownKey" />
            </div>
        </div>
    </div>
</template>

<script>
    import BettingEventMixin from './mixins/betting-event';
    import DropdownGradientTrigger from "../../SiblingsDropdown/trigger-variations/SiblingsDropdownGradientTrigger";
    import EventTimeData from "../../EventTimeData/EventTimeData";
    import VGameLogo from "../../ui/game-logos/VGameLogo";
    import EventTimeDataSimple from "../../EventTimeData/EventTimeDataSimple";
    import VCoefficient from "../../ui/coefficients/VCoefficient";
    import VSimpleScore from "../../ui/scores/VSimpleScore";
    import VImgBubbleSimple from "../../ui/img-bubbles/VImgBubbleSimple";

    export default {
        name: "BettingEventMain",
        components: {
            VImgBubbleSimple,
            VSimpleScore, VCoefficient, EventTimeDataSimple, VGameLogo, EventTimeData, DropdownGradientTrigger},
        mixins: [BettingEventMixin],
        props: {
            dropdownKey: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
