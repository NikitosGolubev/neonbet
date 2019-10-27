<template>
    <td class="default-table__cell">
        <div class="default-table__content">{{ placedAt }}</div>
    </td>
</template>

<script>
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
                return this.$moment(this.dateTime).format('HH:mm');
            }
        }
    }
</script>
