<template>
    <!-- Betting line -->
    <div class="betting-line card">
        <main-betting-line-header />
        
        <main-betting-line-nav />

        <div :key="uniqueKey()" v-for="events in bettingEvents" class="betting-line__content row">
            <betting-event v-for="event in events" :key="event.id" :event="event" />
        </div>

        <!-- Betting line footer -->
        <footer class="card__footer betting-line__footer">
            <v-button-muted-text-change size="lg">
                Показать ещё
            </v-button-muted-text-change>
        </footer>
    </div>
    <!-- END Betting line -->
</template>

<script>
    import BettingEvent from "./BettingEvents/BettingEvent";
    import MockBettingEvents from '../../mock-data/betting-events';
    import splitArrayOnChunks from '../../shared/helpers/split-array-on-chunks';
    import RandomKeyGenerator from '../../shared/mixins/random-key-generator';
    import VButtonMutedTextChange from "../ui/buttons/VButtonMutedTextChange";
    import MainBettingLineHeader from "./MainBettingLineHeader";
    import MainBettingLineNav from "./MainBettingLineNav";

    export default {
        name: "MainBettingLine",
        components: {
            MainBettingLineNav,
            MainBettingLineHeader,
            VButtonMutedTextChange,
            BettingEvent
        },
        mixins: [RandomKeyGenerator],
        data() {
            return {
                numEventsInSingleRow: 2,
            }
        },
        computed: {
            bettingEvents() {
                return splitArrayOnChunks(MockBettingEvents, this.numEventsInSingleRow);
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
