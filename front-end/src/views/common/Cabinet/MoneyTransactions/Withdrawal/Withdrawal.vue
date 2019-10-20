<template>
    <cabinet-layout :breadcrumbs="breadcrumbs">
        <section class="money-transactions">
            <panel-section>
                <header>
                    <panel-text-subheader>
                        <h4>Вывести средства</h4>
                    </panel-text-subheader>
                </header>
                <div class="money-transactions__amount-input">
                    <v-field-secondary placeholder="Введите сумму" />
                </div>
            </panel-section>

            <panel-section>
                <panel-text-subheader>
                    <h4>Платёжная система для вывода</h4>
                </panel-text-subheader>

                <radio-gradient-payment name="payment" :payments="payments" />

                <div class="money-transactions__action-btn">
                    <v-button-outline-gradient-fillable size="lg">
                        Вывести
                    </v-button-outline-gradient-fillable>
                </div>
            </panel-section>
        </section>

        <template #afterMain>
            <withdrawal-last-operations-table :last-withdrawals="withdrawalsHistory" />
        </template>
    </cabinet-layout>
</template>

<script>
    import CabinetLayout from "../../../../../layouts/MainLayout/PanelLayout/CabinetLayout/CabinetLayout";
    import PanelSection from "../../../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    import PanelTextSubheader from "../../../../../layouts/MainLayout/PanelLayout/components/PanelTextSubheader";
    import VFieldSecondary from "../../../../../components/ui/fields/VFieldSecondary";
    import RadioGradientPayment from "../../../../../components/RadioGradientPayment/RadioGradientPayment";
    import VButtonOutlineGradientFillable from "../../../../../components/ui/buttons/VButtonOutlineGradientFillable";
    import MockPayments from '../../../../../mock-data/payments';
    import MockWithdrawals from '../../../../../mock-data/withdrawals-history';
    import WithdrawalLastOperationsTable from "./components/WithdrawalLastOperationsTable";

    export default {
        name: "Withdrawal",
        components: {
            WithdrawalLastOperationsTable,
            VButtonOutlineGradientFillable,
            RadioGradientPayment, VFieldSecondary, PanelTextSubheader, PanelSection, CabinetLayout},
        data() {
            return {
                breadcrumbs: [
                    {name: "Главная"},
                    {name: "Вывод средств"}
                ],

                payments: MockPayments,
                withdrawalsHistory: MockWithdrawals
            }
        }
    }
</script>

<style lang="sass">
    @import "../sass/main"
</style>
