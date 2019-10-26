<template>
    <div class="place-bet">
        <div class="place-bet__item">
            <div>
                <v-field-muted placeholder="Введите сумму:" class="round" />
            </div>
            <div class="place-bet__btn">
                <v-button-outline-gradient-fillable size="sm">
                    Ставка!
                </v-button-outline-gradient-fillable>
            </div>
        </div>

        <div class="place-bet__item">
            <div class="place-bet__sign">Возможный выигрышь на данный момент:</div>
            <div class="place-bet__potential-income">10000Р</div>
        </div>
    </div>
</template>

<script>
    import VButtonOutlineGradientFillable from "../../ui/buttons/VButtonOutlineGradientFillable";
    import VFieldMuted from "../../ui/fields/VFieldMuted";
    export default {
        name: "PlaceBet",
        components: {VFieldMuted, VButtonOutlineGradientFillable}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
