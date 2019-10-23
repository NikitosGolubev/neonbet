<template>
    <form>
        <div class="row center-xs">
            <div class="col-xs-12 col-sm-6">
                <div class="field-group">
                    <label for="email" class="field-group__label">E-mail:</label>
                    <v-field-secondary placeholder="mail@mail.mail" name="email" id="email" />
                </div>
                <div class="field-group centered-captcha-container">
                    <vue-recaptcha
                            class="recaptcha"
                            :loadRecaptchaScript="true"
                            sitekey="6LcmqrQUAAAAAJQE9hj7sjZa0baRxkOjxAzsQIqG"
                    />
                </div>
                <div class="row center-xs">
                    <v-button-outline-gradient-fillable>
                        Запросить восстановление
                    </v-button-outline-gradient-fillable>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import VFieldSecondary from "../../../../../components/ui/fields/VFieldSecondary";
    import VueRecaptcha from "vue-recaptcha";
    import VButtonOutlineGradientFillable from "../../../../../components/ui/buttons/VButtonOutlineGradientFillable";

    export default {
        name: "ForgetPasswordForm",
        components: {VButtonOutlineGradientFillable, VFieldSecondary, VueRecaptcha}
    }
</script>
