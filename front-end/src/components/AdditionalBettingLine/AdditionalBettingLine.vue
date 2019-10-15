<template>
    <div class="additional-betting-line card">
        <header class="additional-betting-line__header card__header">
            <span class="h3-m0">Дополнительные события</span>
        </header>

        <div class="additional-betting-line__nav row card__nav card__nav_disabled">
            <div class="col-xs-2 card__nav-item">Дата</div>
            <div class="col-xs-2 card__nav-item">Игра</div>
            <div class="col-xs-8 card__nav-item">Выбор</div>
        </div>

        <betting-event v-for="event in bettingEvents" :key="event.id" :event="event" />
    </div>
</template>

<script>
    import DropdownElement from "../SiblingsDropdown/SiblingsDropdown";
    import MockBettingEvents from '../../mock-data/upcoming-betting-events';
    import BettingEvent from "./BettingEvents/BettingEvent";

    export default {
        name: "AdditionalBettingLine",
        components: {BettingEvent, DropdownElement},
        data() {
            return {
                bettingEvents: MockBettingEvents
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
