<template>
    <div class="selected-bet__match-data row">
        <div class="col-xs-4">
            <v-img-bubble :img-path="bet.team1.logo" />
        </div>

        <div class="col-xs-4 selected-bet__game-details">
            <v-game-logo class="selected-bet__game-logo" :logo="bet.game.logo" />
            <event-time-data :date-time="bet.startDate" />
        </div>

        <div class="col-xs-4">
            <v-img-bubble :img-path="bet.team2.logo" />
        </div>
    </div>
</template>

<script>
    import SelectedBetMixin from './mixins/selected-bet';
    import VImgBubble from "../../ui/img-bubbles/VImgBubble";
    import VGameLogo from "../../ui/game-logos/VGameLogo";
    import EventTimeData from "../../EventTimeData/EventTimeData";

    export default {
        name: "SelectedBetEventDetails",
        components: {EventTimeData, VGameLogo, VImgBubble},
        mixins: [SelectedBetMixin]
    }
</script>

<style scoped>

</style>
