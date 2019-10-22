<template>
    <user-bet-layout :row-key="rowKey" :event="event">
        <template #eventStatus>
            <user-bet-status :event="event" />
        </template>
    </user-bet-layout>
</template>

<script>
    import TableConfigMixin from '../../../shared/mixins/table-config';
    import EventMixin from '../../../shared/mixins/event/index';
    import UserBetLayout from "./UserBetLayout/UserBetLayout";
    import UserBetStatus from "./UserBetStatus";

    export default {
        name: "UserBet",
        components: {UserBetStatus, UserBetLayout},
        mixins: [TableConfigMixin, EventMixin]
    }
</script>

<style scoped>

</style>
