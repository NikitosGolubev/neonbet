<template>
    <td class="default-table__cell">
        <div class="default-table__content">
            <div class="balance" :class="{'betting-history__balance-lost': isDullSelect}">
                <div class="money balance__money-pick"></div>
                <div class="balance__content">{{ amount }}</div>
            </div>
        </div>
    </td>
</template>

<script>
    import BrightDullModesMixin from '../../../../shared/mixins/bright-dull-modes';

    export default {
        name: "UserBetLayoutPlacedMoney",
        mixins: [BrightDullModesMixin],
        props: {
            amount: {
                type: Number,
                required: true
            }
        }
    }
</script>
