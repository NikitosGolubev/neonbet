<template>
    <div>
        <div class="my-bets__detail">
            <div>
                <div><span class="subheader alternative">Выбор:</span></div>
                <span>{{bet.type}}</span>
            </div>
            <div><span class="selected-bet__choice">{{ userChoice }}</span></div>
        </div>
        <div class="my-bets__detail">
            <div><span class="subheader alternative">Коэффициент:</span></div>
            <div>
                <v-coefficient :is-plain="true" :is-big="true">
                    {{userChoiceCoef}}
                </v-coefficient>
            </div>
        </div>
    </div>
</template>

<script>
    import SelectedBetMixin from './mixins/selected-bet';
    import VCoefficient from "../../ui/coefficients/VCoefficient";

    export default {
        name: "SelectedBetChoiceDetails",
        components: {VCoefficient},
        mixins: [SelectedBetMixin],
        computed: {
            userChoice() {
                let choiceArrayNumeration = this.bet.betting.userChoice - 1;
                return this.bet.betting.choiceName[choiceArrayNumeration];
            },

            userChoiceCoef() {
                if (this.bet.betting.userChoice === 1){
                    this.coef(this.bet.betting.coef1);
                }

                return this.coef(this.bet.betting.coef2);
            }
        },
        methods: {
            coef(coefficient) {
                return coefficient+'%';
            }
        }
    }
</script>

<style scoped>

</style>
