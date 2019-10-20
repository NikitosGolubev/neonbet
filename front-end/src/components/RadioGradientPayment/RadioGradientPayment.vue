<template>
    <div class="payments-container row">
        <div v-for="(payment, index) in payments" :key="uniqueKey()" class="payments-container__item">
            <input class="radio-input"
                   v-model="radioValue"
                   type="radio"
                   :value="payment.name"
                   :name="name"
                   :id="uniqueKey('payments', index)"
            />

            <label :for="uniqueKey('payments', index)">
                <v-gradient-payment :is-active="isChecked(payment.name)" :payment-logo="payment.logo" />
            </label>
        </div>
    </div>
</template>

<script>
    import RandomKeyMixin from "../../shared/mixins/random-key-generator";
    import VGradientPayment from "../ui/payments/VGradinetPayment";

    export default {
        name: "RadioGradientPayment",
        components: {VGradientPayment},
        mixins: [RandomKeyMixin],
        props: {
            name: {
                type: String,
                required: true
            },
            payments: {
                type: Array,
                required: true
            }
        },
        data() {
            return {
                radioValue: null
            }
        },
        methods: {
            isChecked(paymentName) {
                return this.radioValue === paymentName;
            }
        },
        watch: {
            radioValue(newVal) {
                this.$emit('input', newVal); // for v-model
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
