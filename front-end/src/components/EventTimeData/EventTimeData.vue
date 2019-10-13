<template>
    <div class="event-time-data">
        <div class="event-time-data__item">{{ time }}</div>
        <div class="event-time-data__item">{{ date }}</div>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        name: "EventTimeData",
        props: {
            dateTime: {
                type: String,
                required: true
            }
        },
        computed: {
            time() {
                return moment(this.dateTime).format('HH:mm');
            },

            date() {
                return moment(this.dateTime).format('D ddd');
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
