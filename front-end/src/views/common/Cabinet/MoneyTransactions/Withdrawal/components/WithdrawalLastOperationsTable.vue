<template>
    <section class="content-container">
        <default-table>
            <table class="default-table table_stretch">
                <thead class="default-table__header">
                <tr class="default-table__row">
                    <th class="default-table__head-cell">ID</th>
                    <th data-primary-header class="default-table__head-cell">Дата зачисления средств</th>
                    <th class="default-table__head-cell">Сумма</th>
                    <th class="default-table__head-cell">Способ оплаты</th>
                    <th class="default-table__head-cell">Время</th>
                </tr>
                </thead>

                <tbody class="default-table__body">
                    <withdrawal-last-operations-table-row
                            v-for="withdrawal in lastWithdrawals"
                            :withdrawal="withdrawal"
                            :key="withdrawal.id"
                    />
                </tbody>
            </table>
        </default-table>
    </section>
</template>

<script>
    import DefaultTable from "../../../../../../components/DefaultTable/DefaultTable";
    import WithdrawalLastOperationsTableRow from "./WithdrawalLastOperationsTableRow";

    export default {
        name: "WithdrawalLastOperationsTable",
        components: {WithdrawalLastOperationsTableRow, DefaultTable},
        props: {
            lastWithdrawals: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
