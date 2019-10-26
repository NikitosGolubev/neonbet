<template>
    <div class="create-ticket-form">
        <header>
            <panel-text-subheader>
                <h4>Создать новый тикет</h4>
            </panel-text-subheader>
        </header>
        <div class="row center-xs">
            <div class="col-xs-12 col-md-10">
                <form>
                    <div class="field-group">
                        <v-select-secondary class="round" :is-stable-styling="true">
                            <option disabled selected>Тема вопроса</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                        </v-select-secondary>
                    </div>
                    <div class="field-group">
                        <v-textarea-secondary :is-stable-styling="true" placeholder="Описание проблемы" class="round" />
                    </div>
                    <div class="field-group centered-captcha-container">
                        <vue-recaptcha
                                class="recaptcha create-ticket-form__recaptcha"
                                :loadRecaptchaScript="true"
                                sitekey="6LcmqrQUAAAAAJQE9hj7sjZa0baRxkOjxAzsQIqG"
                        />
                    </div>
                    <div class="field-group create-ticket-form__submit-container">
                        <div class="create-ticket-form__sign text_small-sz">Гарантируем конфиденциальность ваших данных</div>

                        <v-button mode="primary-light">
                            Создать тикет
                        </v-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import PanelTextSubheader from "../../../../layouts/MainLayout/PanelLayout/components/PanelTextSubheader";
    import VFieldSecondary from "../../../../components/ui/fields/VFieldSecondary";
    import VTextareaSecondary from "../../../../components/ui/fields/VTextareaSecondary";
    import VSelectSecondary from "../../../../components/ui/fields/VSelectSecondary";
    import VButton from "../../../../components/ui/buttons/VButton";
    import VueRecaptcha from "vue-recaptcha";

    export default {
        name: "SupportApplyForm",
        components: {VButton, VSelectSecondary, VTextareaSecondary, VFieldSecondary, PanelTextSubheader, VueRecaptcha}
    }
</script>

<style scoped>

</style>
