<template>
    <tr class="default-table__row">
        <td class="default-table__cell">
            <div class="default-table__content">{{ withdrawal.id }}</div>
        </td>
        <td data-primary-content class="default-table__cell">
            <div class="default-table__content">{{ commitDate }}</div>
        </td>
        <td class="default-table__cell">
            <div class="default-table__content">
                <div class="balance">
                    <div class="money balance__money-pick"></div>
                    <div class="balance__content">{{ withdrawal.sum }}</div>
                </div>
            </div>
        </td>
        <td class="default-table__cell">
            <div class="default-table__content">
                <div class="bg-center" :style="{backgroundImage: `url(${withdrawal.payment.logo})`}"></div>
            </div>
        </td>
        <td class="default-table__cell">
            <div class="default-table__content">{{ commitTime }}</div>
        </td>
    </tr>
</template>

<script>
    import moment from 'moment'

    export default {
        name: "WithdrawalLastOperationsTableRow",
        props: {
            withdrawal: {
                type: Object,
                required: true
            }
        },
        computed: {
            commitDate() {
                return moment(this.withdrawal.commitDate).format('D MMMM YYYY');
            },

            commitTime() {
                return moment(this.withdrawal.commitDate).format('HH:mm');
            }
        }
    }
</script>
