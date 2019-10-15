<template>
    <div class="place-bet">
        <div class="place-bet__item">
            <div>
                <input class="field field_dark-rounded" type="text" placeholder="Введите сумму:" />
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
    export default {
        name: "PlaceBet",
        components: {VButtonOutlineGradientFillable}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
