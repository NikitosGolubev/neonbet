<template>
    <td class="default-table__cell">
        <div class="default-table__content">{{ placedAt }}</div>
    </td>
</template>

<script>
    import moment from 'moment';

    export default {
        name: "UserBetLayoutPlaceTime",
        props: {
            dateTime: {
                type: String,
                required: true
            }
        },
        computed: {
            placedAt() {
                return moment(this.dateTime).format('HH:mm');
            }
        }
    }
</script>
