<template>
    <panel-layout :breadcrumbs="breadcrumbs">
        <panel-text-header>
            <h2>Техническая поддержка</h2>
        </panel-text-header>

        <section class="user-support">
            <panel-section>
                <support-apply-form />
            </panel-section>

            <panel-section>
                <support-tickets :tickets="tickets" />
            </panel-section>
        </section>
    </panel-layout>
</template>

<script>
    import PanelLayout from "../../../layouts/MainLayout/PanelLayout/PanelLayout";
    import PanelTextHeader from "../../../layouts/MainLayout/PanelLayout/components/PanelTextHeader";
    import PanelSection from "../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    import SupportApplyForm from "./components/SupportApplyForm";
    import SupportTickets from "./components/SupportTickets";
    import MockSupportTickets from '../../../mock-data/support-tickets';

    export default {
        name: "Support",
        components: {
            SupportTickets,
            SupportApplyForm,
            PanelSection,
            PanelTextHeader,
            PanelLayout
        },
        data() {
            return {
                breadcrumbs: [
                    {name: "Главная"},
                    {name: "Тех. поддержка"}
                ],

                tickets: MockSupportTickets
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
