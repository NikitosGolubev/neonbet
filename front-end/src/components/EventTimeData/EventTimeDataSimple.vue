<template>
    <div class="event-time-data">
        <div>{{ date }} - {{ time }}</div>
    </div>
</template>

<script>
    import EventTimeMixin from './mixins/event-time';

    export default {
        name: "EventTimeDataSimple",
        mixins: [EventTimeMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
