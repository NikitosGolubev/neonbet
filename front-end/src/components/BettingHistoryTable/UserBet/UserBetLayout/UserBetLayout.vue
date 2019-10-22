<template>
    <tr :data-row-key="rowKey" class="default-table__row">
        <user-bet-layout-place-date :date-time="getEventBetPlaceDate" />

        <user-bet-layout-game-logo :logo="getEventGameLogo" />

        <user-bet-layout-event-presentation :event="event" />

        <td class="default-table__cell">
            <slot name="eventStatus"></slot>
        </td>

        <user-bet-layout-event-coef :coefficient="getEventBetCoefficient" />

        <user-bet-layout-placed-money :is-dull-select="isUserBetLose" :amount="getEventBetSum" />

        <user-bet-layout-place-time :date-time="getEventBetPlaceDate" />
    </tr>
</template>
<script>
    import TableConfigMixin from '../../../../shared/mixins/table-config';
    import EventMixin from '../../../../shared/mixins/event/index';

    import UserBetLayoutPlaceDate from "./UserBetLayoutPlaceDate";
    import UserBetLayoutPlaceTime from "./UserBetLayoutPlaceTime";
    import UserBetLayoutGameLogo from "./UserBetLayoutGameLogo";
    import UserBetLayoutPlacedMoney from "./UserBetLayoutPlacedMoney";
    import UserBetLayoutEventCoef from "./UserBetLayoutEventCoef";
    import UserBetLayoutEventPresentation from "./UserBetLayoutEventPresentation";

    export default {
        name: "UserBetLayout",
        mixins: [TableConfigMixin, EventMixin],
        components: {
            UserBetLayoutEventPresentation,
            UserBetLayoutEventCoef,
            UserBetLayoutPlacedMoney,
            UserBetLayoutGameLogo,
            UserBetLayoutPlaceTime,
            UserBetLayoutPlaceDate
        }
    }
</script>

<style scoped>

</style>
