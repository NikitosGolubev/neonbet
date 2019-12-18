<template>
    <form>
        <div class="row center-xs">
            <div class="col-xs-12 col-sm-6">
                <div class="field-group">
                    <label for="email" class="field-group__label">E-mail:</label>
                    <v-field-secondary placeholder="mail@mail.mail" name="email" id="email" />
                </div>
                <div class="field-group">
                    <label for="password" class="field-group__label">Пароль:</label>
                    <v-field-secondary type="password" placeholder="Ваш пароль..." name="password" id="password" />
                </div>
                <div class="field-group row between-xs">
                    <v-checkbox-primary name="remember_me">
                        <span class="primary-light">Запомнить меня?</span>
                    </v-checkbox-primary>
                    <div>
                        <router-link :to="{name: 'forgetPassword'}">
                            <span class="link_primary-light">Забыли пароль?</span>
                        </router-link>
                    </div>
                </div>
                <div class="row center-xs">
                    <v-button-outline-gradient-fillable>
                        Войти
                    </v-button-outline-gradient-fillable>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import VCheckboxPrimary from "../../../../../components/ui/checkboxes/VCheckboxPrimary";
    import VFieldSecondary from "../../../../../components/ui/fields/VFieldSecondary";
    import VButtonOutlineGradientFillable from "../../../../../components/ui/buttons/VButtonOutlineGradientFillable";
    export default {
        name: "LoginForm",
        components: {VButtonOutlineGradientFillable, VFieldSecondary, VCheckboxPrimary}
    }
</script>
