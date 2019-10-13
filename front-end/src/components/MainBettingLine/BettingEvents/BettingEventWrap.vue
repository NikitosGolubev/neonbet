<template>
    <div class="col-xs-12 col-sm-6">
        <div class="betting-event betting-line__event card__content">
            <!-- FIRST ROW -->
            <div class="row">
                <div class="betting-event__grid-item col-xs-4">
                    <v-img-bubble :img-path="event.team1.logo" />
                </div>

                <div class="betting-event__general-data betting-event__grid-item col-xs-4">
                    <v-game-logo class="betting-event__game-logo" :logo="event.game.logo" />
                    <slot name="firstRowMiddle"></slot>
                </div>

                <div class="betting-event__grid-item col-xs-4">
                    <v-img-bubble :img-path="event.team2.logo" />
                </div>
            </div>
            <!-- FIRST ROW END -->

            <!-- SECOND ROW -->
            <div class="row">
                <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                    <div class="betting-event__team-name">{{event.team1.name}}</div>
                    <slot name="secondRowTeam1"></slot>
                </div>

                <div class="betting-event__grid-item col-xs-4">
                    <slot name="secondRowMiddle"></slot>
                </div>

                <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                    <div class="betting-event__team-name">{{event.team2.name}}</div>
                    <slot name="secondRowTeam2"></slot>
                </div>
            </div>

            <!-- THIRD ROW -->
            <div class="row">
                <div class="betting-event__grid-item col-xs-4">
                    <slot name="thirdRowTeam1"></slot>
                </div>

                <div class="betting-event__versus betting-event__grid-item col-xs-4">vs</div>

                <div class="betting-event__grid-item col-xs-4">
                    <slot name="thirdRowTeam2"></slot>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import BettingEventMixin from './mixins/betting-event';
    import VGameLogo from "../../ui/game-logos/VGameLogo";
    import VImgBubble from "../../ui/img-bubbles/VImgBubble";

    export default {
        name: "BettingEventWrap",
        components: {VImgBubble, VGameLogo},
        mixins: [BettingEventMixin]
    }
</script>

<style scoped>

</style>
