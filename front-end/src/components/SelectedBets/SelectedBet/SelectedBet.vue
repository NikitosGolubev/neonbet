<template>
    <div class="selected-bet">
        <div class="selected-bet__controls">
            <div class="item-btn red-cross"></div>
        </div>

        <selected-bet-event-details :bet="bet" />

        <selected-bet-choice-details :bet="bet" />
    </div>
</template>

<script>
    import SelectedBetMixin from './mixins/selected-bet';
    import SelectedBetEventDetails from "./SelectedBetEventDetails";
    import SelectedBetChoiceDetails from "./SelectedBetChoiceDetails";

    export default {
        name: "SelectedBet",
        components: {
            SelectedBetChoiceDetails,
            SelectedBetEventDetails
        },
        mixins: [SelectedBetMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
