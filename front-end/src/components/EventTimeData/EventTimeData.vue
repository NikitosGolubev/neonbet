<template>
    <div class="event-time-data">
        <div class="event-time-data__item">{{ time }}</div>
        <div class="event-time-data__item">{{ date }}</div>
    </div>
</template>

<script>
    import EventTimeMixin from './mixins/event-time';

    export default {
        name: "EventTimeData",
        mixins: [EventTimeMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
