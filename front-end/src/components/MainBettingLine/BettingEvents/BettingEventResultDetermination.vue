<template>
    <v-button-result-disabled>
        <span v-if="isWinner(team)">win</span>
        <span v-else-if="winnerNum === 0">tie</span>
        <span v-else>loss</span>
    </v-button-result-disabled>
</template>

<script>
    import VButtonResultDisabled from "../../ui/buttons/VButtonResultDisabled";
    import BettingEventResultDetermination from './mixins/betting-event-result-determination';

    export default {
        name: "BettingEventResultDetermination",
        components: {VButtonResultDisabled},
        mixins: [BettingEventResultDetermination],
        props: {
            team: {
                required: true,
                type: Number
            }
        }
    }
</script>

<style scoped>

</style>
