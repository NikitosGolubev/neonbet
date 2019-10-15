<template>
    <v-button-side class="my-bets__btn my-bets__btn_open" :is-gradient="true">
        <template #beforeContent><div class="banknote"></div></template>

        <div class="my-bets__btn_text-open">Ваши ставки</div>

        <template #afterContent>
            <div class="my-bets__btn-bets-counter">
                ({{ numEventsPicked }})
            </div>
        </template>
    </v-button-side>
</template>

<script>
    import VButtonSide from "../ui/buttons/VButtonSide";
    import ButtonManagerMixin from './mixins/button-manager';

    export default {
        name: "SelectedBetsOpenBtn",
        components: {VButtonSide},
        mixins: [ButtonManagerMixin]
    }
</script>
