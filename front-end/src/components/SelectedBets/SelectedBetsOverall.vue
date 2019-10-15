<template>
    <div class="my-bets__overall">
        <div class="my-bets__detail">
            <div class="subheader">Тип ставки:</div>

            <div v-if="bets.length > 1" class="my-bets__type">Экспресс</div>
            <div v-else class="my-bets__type">Ординар</div>
        </div>

        <div class="my-bets__detail">
            <div class="subheader">Итоговый коэф:</div>
            <v-coefficient :is-big="true" :is-plain="true">
                {{ finalCoef }}
            </v-coefficient>
        </div>
    </div>
</template>

<script>
    import VCoefficient from "../ui/coefficients/VCoefficient";
    export default {
        name: "SelectedBetsOverall",
        components: {VCoefficient},
        props: {
            bets: {
                type: Array,
                required: true
            }
        },
        computed: {
            // mock
            finalCoef() {
                return 9.92;
            }
        }
    }
</script>

<style scoped>

</style>
