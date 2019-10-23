<template>
    <form>
        <div class="row center-xs">
            <div class="col-xs-12 col-sm-6">
                <div class="field-group">
                    <label for="new_password" class="field-group__label">Новый пароль:</label>
                    <v-field-secondary type="password" placeholder="> 8 символов, буквы и цифры" name="new_password" id="new_password" />
                </div>
                <div class="field-group">
                    <label for="repeat_password" class="field-group__label">Повторите пароль:</label>
                    <v-field-secondary type="password" name="repeat_password" id="repeat_password" />
                </div>
                <div class="row center-xs">
                    <v-button-outline-gradient-fillable>
                        Восстановить пароль
                    </v-button-outline-gradient-fillable>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import VFieldSecondary from "../../../../../components/ui/fields/VFieldSecondary";
    import VButtonOutlineGradientFillable from "../../../../../components/ui/buttons/VButtonOutlineGradientFillable";
    export default {
        name: "PasswordRecoveryForm",
        components: {VButtonOutlineGradientFillable, VFieldSecondary}
    }
</script>
