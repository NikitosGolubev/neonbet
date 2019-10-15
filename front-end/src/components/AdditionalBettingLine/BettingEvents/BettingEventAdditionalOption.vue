<template>
    <div class="additional-event">
        <div class="additional-event__addition_wrap">
            <div class="row additional-event__addition">
                <div class="additional-betting-line__item col-xs-11 col-xs-offset-0  col-sm-offset-2 col-sm-2">
                    <div class="additional-event__option-name">{{additionalEvent.type}}</div>
                </div>

                <div class="additional-betting-line__item col-xs-11 col-sm-7">
                    <div class="additional-event__data">
                        <div class="additional-event__team-name additional-event__data-item">
                            {{ event.team1.name }}
                        </div>

                        <div class="additional-event__data-item text_semibold">
                            <v-coefficient>{{coef(additionalEvent.betting.coef1)}}</v-coefficient>
                        </div>

                        <div class="additional-event__data-item">
                            <v-simple-score :is-empty="true" class="default_bg" />
                        </div>

                        <div class="additional-event__data-item text_semibold">
                            <v-coefficient>{{coef(additionalEvent.betting.coef2)}}</v-coefficient>
                        </div>

                        <div class="additional-event__team-name additional-event__data-item">
                            {{ event.team2.name }}
                        </div>
                    </div>
                </div>

                <div class="additional-betting-line__item col-xs-1 col-sm-1">
                    <div class="info-pick"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import BettingEventMixin from './mixins/betting-event';
    import VSimpleScore from "../../ui/scores/VSimpleScore";
    import VCoefficient from "../../ui/coefficients/VCoefficient";

    export default {
        name: "BettingEventAdditionalOption",
        components: {VCoefficient, VSimpleScore},
        mixins: [BettingEventMixin],
        props: {
            additionalEvent: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
