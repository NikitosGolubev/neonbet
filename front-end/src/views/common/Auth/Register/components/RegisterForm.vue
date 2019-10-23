<template>
    <form>
        <div class="row user-registration__form-fields">
            <div class="col-xs-12 col-md-6 user-registration__form-fields_left">
                <div class="field-group">
                    <label class="field-group__label" for="nickname">
                        Nickname:<span class="primary-light">*</span>
                    </label>
                    <v-field-secondary id="nickname" name="nickname" placeholder="Ваш ник..."/>
                </div>
                <div class="field-group">
                    <label class="field-group__label" for="email">
                        E-mail:<span class="primary-light">*</span>
                    </label>
                    <v-field-secondary id="email" name="email" placeholder="email@email.email"/>
                </div>
                <div class="field-group">
                    <label class="field-group__label" for="fullname">
                        ФИО:<span class="primary-light">*</span>
                    </label>
                    <v-field-secondary error-message="Это поле с ошибкой!" id="fullname" name="fullname" placeholder="Иванов Иван Иванович"/>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 user-registration__form-fields_right">
                <div class="field-group">
                    <label class="field-group__label" for="birthdate">
                        Дата рождения:<span class="primary-light">*</span>
                    </label>
                    <v-field-secondary  id="birthdate" name="birthdate" placeholder="dd.mm.yyyy"/>
                </div>
                <div class="field-group">
                    <label class="field-group__label" for="password">
                        Пароль:<span class="primary-light">*</span>
                    </label>
                    <v-field-secondary  id="password" type="password" name="password" placeholder="> 8 символов, буквы и цифры"/>
                </div>
                <div class="field-group">
                    <label class="field-group__label" for="password_repeat">
                        Повторите пароль:<span class="primary-light">*</span>
                    </label>
                    <v-field-secondary  id="password_repeat" type="password" name="password_repeat" />
                </div>
            </div>
        </div>
        <div class="centered-captcha-container">
            <vue-recaptcha
                    class="recaptcha"
                    :loadRecaptchaScript="true"
                    sitekey="6LcmqrQUAAAAAJQE9hj7sjZa0baRxkOjxAzsQIqG"
            />
        </div>
        <div class="user-registration__form-utils">
            <div class="user-registration__util">
                <v-button-outline-gradient-fillable>
                    Зарегистрироваться
                </v-button-outline-gradient-fillable>
            </div>
            <div class="user-registration__util">
                <a class="link link_primary-gradient" href="#">Забыли пароль?</a>
            </div>
        </div>
    </form>
</template>

<script>
    import VueRecaptcha from 'vue-recaptcha';
    import VFieldSecondary from "../../../../../components/ui/fields/VFieldSecondary";
    import VButtonOutlineGradientFillable from "../../../../../components/ui/buttons/VButtonOutlineGradientFillable";

    export default {
        name: "RegisterForm",
        components: {VButtonOutlineGradientFillable, VFieldSecondary, VueRecaptcha}
    }
</script>
