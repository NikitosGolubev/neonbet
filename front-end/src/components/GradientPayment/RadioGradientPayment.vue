<template>
    <div class="payments-container row">
        <div
             v-for="(payment, index) in payments"
             :key="getRandomId()"
             class="payments-container__item">

            <input class="radio-input"
                   v-model="radioValue"
                   type="radio"
                   :value="payment.name"
                   :name="fieldName"
                   :id="getFieldId(index)"
            />
            <label :for="getFieldId(index)">
                <gradient-payment :is-active="isChecked(payment.name)" :payment-logo="payment.logo" />
            </label>
        </div>
    </div>
</template>

<script>
    import uuid from 'uuid/v4';
    import GradientPayment from "./GradientPayment";

    export default {
        name: "RadioGradientPayment",
        components: {GradientPayment},
        props: {
            fieldName: {
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
                fieldsId: uuid(),
                radioValue: null
            }
        },
        methods: {
            getRandomId() {
                return uuid();
            },

            getFieldId(index) {
                return this.fieldsId + index;
            },

            isChecked(paymentName) {
                return this.radioValue === paymentName;
            }
        }
    }
</script>

<style scoped>
    .radio-input {
        display: none;
    }
</style>