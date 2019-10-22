<template>
    <div class="betting-history">
        <default-table>
            <table class="default-table table_stretch default-table_little-content-gap">
                <thead class="default-table__header">
                <tr ref="tableHeaders" class="default-table__row">
                    <th class="default-table__head-cell">Дата ставки</th>
                    <th class="default-table__head-cell">Игра</th>
                    <th data-primary-header class="default-table__head-cell">Событие</th>
                    <th class="default-table__head-cell">Статус</th>
                    <th class="default-table__head-cell">Коэф.</th>
                    <th class="default-table__head-cell">Сумма</th>
                    <th class="default-table__head-cell">Время</th>
                </tr>
                </thead>

                <tbody class="default-table__body">
                    <template v-for="(event, index) in bettingHistory">
                        <user-bet :row-key="uniqueKey('rowKey', index)" :event="event" />

                        <user-bet-details-dropdown-trigger :dropdown-key="uniqueKey('betDropdown', index)" />

                        <user-bet-details
                                :row-key="uniqueKey('rowKey', index)"
                                :dropdown-key="uniqueKey('betDropdown', index)"
                                :event="event"
                                :total-num-table-cells="headersNum"
                        />
                    </template>
                </tbody>
            </table>
        </default-table>
    </div>
</template>

<script>
    import RandomKeyMixin from '../../shared/mixins/random-key-generator';
    import DefaultTable from "../DefaultTable/DefaultTable";
    import UserBet from "./UserBet/UserBet";
    import UserBetDetailsDropdownTrigger from "./UserBet/UserBetDetailsDropdownTrigger";
    import UserBetDetails from "./UserBet/UserBetDetails";


    export default {
        name: "BettingHistoryTable",
        mixins: [RandomKeyMixin],
        components: {UserBetDetails, UserBetDetailsDropdownTrigger, UserBet, DefaultTable},
        props: {
            bettingHistory: {
                type: Array,
                required: true
            }
        },
        data() {
            return {
                headersNum: null
            }
        },
        mounted() {
            this.headersNum = this.$refs.tableHeaders.children.length;
        }
    }
</script>
