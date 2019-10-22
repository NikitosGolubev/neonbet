<template>
    <user-bet-layout-status :class="statusClass">
        <div v-if="isUserBetWin">Выигрыш</div>
        <div v-else-if="isUserBetLose">Проигрыш</div>
        <div v-else-if="isUserBetReturned">Возврат</div>
        <div v-else-if="isEventLive" >
            <simple-live-sensor />
        </div>
        <div v-else-if="isEventUpcoming">Не началось</div>
    </user-bet-layout-status>
</template>

<script>
    import EventMixin from '../../../shared/mixins/event/index';

    import UserBetLayoutStatus from "./UserBetLayout/UserBetLayoutStatus";
    import SimpleLiveSensor from "../../LiveSensor/SimpleLiveSensor";

    export default {
        name: "UserBetStatus",
        components: {SimpleLiveSensor, UserBetLayoutStatus},
        mixins: [EventMixin],
        computed: {
            statusClass() {
                return {
                    'success_bg': this.isUserBetWin,
                    'danger_bg': this.isUserBetLose,
                    'primary-dark_bg': this.isUserBetReturned,
                    'secondary_bg': this.isEventUpcoming
                };
            }
        }
    }
</script>
