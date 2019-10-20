<template>
    <cabinet-layout :breadcrumbs="breadcrumbs">
        <section class="user-profile">
            <section class="money-transactions">
                <panel-section>
                    <header>
                        <panel-text-subheader>
                            <h4>Сделать депозит</h4>
                        </panel-text-subheader>
                    </header>
                    <div class="money-transactions__amount-input">
                        <v-field-secondary placeholder="Введите сумму" />
                    </div>
                </panel-section>

                <panel-section>
                    <panel-text-subheader>
                        <h4>Выберите способ оплаты</h4>
                    </panel-text-subheader>

                    <radio-gradient-payment name="payment" :payments="payments" />

                    <div class="money-transactions__action-btn">
                        <v-button-outline-gradient-fillable size="lg">
                            Оплатить
                        </v-button-outline-gradient-fillable>
                    </div>
                </panel-section>
            </section>
        </section>
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

    export default {
        name: "Deposit",
        components: {
            VButtonOutlineGradientFillable,
            RadioGradientPayment, VFieldSecondary, PanelTextSubheader, PanelSection, CabinetLayout},
        data() {
            return {
                breadcrumbs: [
                    {name: "Главная"},
                    {name: "Сделать депозит"}
                ],

                payments: MockPayments
            }
        }
    }
</script>

<style lang="sass">
    @import "../sass/main"
</style>
