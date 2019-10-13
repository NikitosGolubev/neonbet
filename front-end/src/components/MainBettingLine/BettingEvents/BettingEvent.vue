<template>
    <betting-event-upcoming v-if="isUpcomingEvent()" :event="event" />
    <betting-event-live v-else-if="isLiveEvent()" :event="event" />
    <betting-event-completed v-else-if="isCompletedEvent()" :event="event" />
</template>

<script>
    import BettingEventMixin from './mixins/betting-event';
    import BettingEventUpcoming from "./BettingEventUpcoming";
    import BettingEventLive from "./BettingEventLive";
    import BettingEventCompleted from "./BettingEventCompleted";

    export default {
        name: "BettingEvent",
        components: {BettingEventCompleted, BettingEventLive, BettingEventUpcoming},
        mixins: [BettingEventMixin],
        methods: {
            isUpcomingEvent() {
                return this.event.status === 'upcoming';
            },

            isLiveEvent() {
                return this.event.status === 'live';
            },

            isCompletedEvent() {
                return this.event.status === 'completed';
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
