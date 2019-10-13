<template>
    <header class="betting-line__header card__header">
        <div class="betting-line__header-controls">
            <v-button-fillable-gradient :is-active="true" class="betting-line__header-controls_gap">
                Матчи
            </v-button-fillable-gradient>
            <v-button-fillable-gradient class="betting-line__header-controls_gap">
                Турниры
            </v-button-fillable-gradient>
        </div>
        <div class="betting-line__header-controls">
            <v-button-fillable-simple :is-active="true" class="betting-line__header-controls_gap">
                Активные
            </v-button-fillable-simple>
            <v-button-fillable-simple class="betting-line__header-controls_gap">
                Результаты
            </v-button-fillable-simple>
        </div>
    </header>
</template>

<script>
    import VButtonFillableGradient from "../ui/buttons/VButtonFillableGradient";
    import VButtonFillableSimple from "../ui/buttons/VButtonFillableSimple";
    export default {
        name: "MainBettingLineHeader",
        components: {VButtonFillableSimple, VButtonFillableGradient}
    }
</script>

<style scoped>

</style>
