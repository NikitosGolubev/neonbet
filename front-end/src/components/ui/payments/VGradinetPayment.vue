<template>
    <div class="payment-gradient_wrap" :class="{'payment-gradient_active': isActive}">
        <div class="payment-gradient" :style="{backgroundImage: cssPaymentLogo}">
        </div>
        <div class="payment-gradient_border"></div>
    </div>
</template>

<script>
    export default {
        name: "VGradientPayment",
        computed: {
            cssPaymentLogo() {
                return `url(${this.paymentLogo})`;
            }
        },
        props: {
            paymentLogo: {
                type: String,
                required: true
            },
            isActive: {
                type: Boolean,
                default: false
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
