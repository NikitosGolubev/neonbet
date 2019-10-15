<template>
    <div class="my-bets__content card">
        <selected-bets-content-header />

        <main-scroll class="my-bets__data card__content">
            <selected-bet :bet="bet" v-for="bet in selectedBets" :key="bet.id" />

            <selected-bets-overall :bets="selectedBets" />

            <place-bet />
        </main-scroll>
    </div>
</template>

<script>
    import SelectedBetsContentHeader from "./SelectedBetsContentHeader";
    import SelectedBet from "./SelectedBet/SelectedBet";
    import MockSelectedBets from '../../mock-data/selected-bets';
    import SelectedBetsOverall from "./SelectedBetsOverall";
    import PlaceBet from "./PlaceBet/PlaceBet";

    export default {
        name: "SelectedBetsContent",
        components: {PlaceBet, SelectedBetsOverall, SelectedBet, SelectedBetsContentHeader},
        data() {
            return {
                selectedBets: MockSelectedBets,
            }
        }
    }
</script>

<style scoped>

</style>
