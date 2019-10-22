<template>
    <cabinet-layout :breadcrumbs="breadcrumbs">
        <panel-section>
            <panel-text-subheader>
                <h4>История ставок</h4>
            </panel-text-subheader>

            <betting-history-table :betting-history="bettingHistory" />

        </panel-section>
    </cabinet-layout>
</template>

<script>
    import CabinetLayout from "../../../../layouts/MainLayout/PanelLayout/CabinetLayout/CabinetLayout";
    import PanelSection from "../../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    import PanelTextSubheader from "../../../../layouts/MainLayout/PanelLayout/components/PanelTextSubheader";
    import MockBettingHistory from '../../../../mock-data/betting-history';
    import BettingHistoryTable from "../../../../components/BettingHistoryTable/BettingHistoryTable";


    export default {
        name: "BettingHistory",
        components: {BettingHistoryTable, PanelTextSubheader, PanelSection, CabinetLayout},
        data() {
            return {
                breadcrumbs: [
                    {name: "Главная"},
                    {name: "История ставок"}
                ],

                bettingHistory: MockBettingHistory
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
