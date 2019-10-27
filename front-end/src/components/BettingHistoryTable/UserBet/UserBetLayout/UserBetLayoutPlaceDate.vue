<template>
    <td class="default-table__cell">
        <div class="default-table__content">{{ placedAt }}</div>
    </td>
</template>

<script>
    export default {
        name: "UserBetLayoutPlaceDate",
        props: {
            dateTime: {
                type: String,
                required: true
            }
        },
        computed: {
            placedAt() {
                return this.$moment(this.dateTime).format('DD.MM.YYYY');
            }
        }
    }
</script>

<style scoped>

</style>
