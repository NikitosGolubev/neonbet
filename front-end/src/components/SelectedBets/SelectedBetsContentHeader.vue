<template>
    <div class="my-bets__header card__header">
        <v-simple-logo />

        <v-button-outline-gradient-fillable size="sm">
            Очистить всё
        </v-button-outline-gradient-fillable>
    </div>
</template>

<script>
    import VButtonOutlineGradientFillable from "../ui/buttons/VButtonOutlineGradientFillable";
    import VSimpleLogo from "../ui/logos/VSimpleLogo";

    export default {
        name: "SelectedBetsContentHeader",
        components: {VSimpleLogo, VButtonOutlineGradientFillable}
    }
</script>

