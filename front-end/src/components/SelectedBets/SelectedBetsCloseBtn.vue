<template>
    <v-button-side class="my-bets__btn secondary_bg">
        <template #beforeContent><div class="white-cross"></div></template>

        Ваши ставки

        <template #afterContent>
            <div class="my-bets__btn-bets-counter">
                ({{numEventsPicked}})
            </div>
        </template>
    </v-button-side>
</template>

<script>
    import VButtonSide from "../ui/buttons/VButtonSide";
    import ButtonManagerMixin from './mixins/button-manager';

    export default {
        name: "SelectedBetsCloseBtn",
        components: {VButtonSide},
        mixins: [ButtonManagerMixin]
    }
</script>
