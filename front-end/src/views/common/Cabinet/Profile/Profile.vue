<template>
    <cabinet-layout :breadcrumbs="breadcrumbs">
        <section class="user-profile">
            <panel-section>
                <header>
                    <panel-text-subheader>
                        <h4>Мой профиль</h4>
                    </panel-text-subheader>
                </header>
                <div>
                    <user-profile>
                        <user-profile-content></user-profile-content>
                    </user-profile>
                </div>
            </panel-section>

            <panel-section>
                <div class="user-profile__personal-data">
                    <div class="row">
                        <div class="user-profile__personal-data_left col-xs-12 col-md-6">
                            <div class="user-profile__field-data">
                                <label class="field_label">ФИО:</label>
                                <editable-field field-name="fullname" field-val="Иванов Иван Иванович"/>
                            </div>
                            <div class="user-profile__field-data">
                                <label class="field_label">Ник:</label>
                                <editable-field field-name="nickname" field-val="DarkNet88"/>
                            </div>
                        </div>
                        <div class="user-profile__personal-data_right col-xs-12 col-md-6">
                            <div class="user-profile__field-data">
                                <label class="field_label">E-mail:</label>
                                <editable-field field-name="email" field-val="darknet88@gmail.com"/>
                            </div>
                            <div class="row">
                                <div class="user-profile__field-data user-profile__double-field col-xs-12 col-sm-6">
                                    <label class="field_label">Дата рождения:</label>
                                    <field-secondary :is-disabled="true" disabled :name="'birthdate'"
                                                     :value="'23.02.1988'"/>
                                </div>
                                <div class="user-profile__field-data user-profile__double-field col-xs-12 col-sm-6">
                                    <label class="field_label">Дата регистрации:</label>
                                    <field-secondary :is-disabled="true" disabled :name="'regdate'"
                                                     :value="'17.10.2018'"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </panel-section>

            <panel-section class="centered">
                <v-button-outline-gradient-fillable size="lg">
                    Сохранить настройки
                </v-button-outline-gradient-fillable>
            </panel-section>
        </section>
    </cabinet-layout>
</template>

<script>
    import UserDashboardNav from "../../../../components/CabinetNav/CabinetNav";
    import UserProfile from "../../../../components/UserProfile/UserProfile";
    import UserProfileContent from "../../../../components/UserProfile/PersonalCabinet/UserProfileContent";
    import EditableField from "../../../../components/Fields/EditableField";
    import FieldSecondary from "../../../../components/Fields/FieldSecondary";
    import CabinetLayout from "../../../../layouts/MainLayout/PanelLayout/CabinetLayout/CabinetLayout";
    import PanelSection from "../../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    import PanelTextSubheader from "../../../../layouts/MainLayout/PanelLayout/components/PanelTextSubheader";
    import VButtonOutlineGradientFillable from "../../../../components/ui/buttons/VButtonOutlineGradientFillable";

    export default {
        name: "Profile",
        components: {
            VButtonOutlineGradientFillable,
            PanelTextSubheader,
            PanelSection,
            CabinetLayout,
            FieldSecondary, EditableField, UserProfileContent, UserProfile, UserDashboardNav},
        data() {
            return {
                breadcrumbs: [
                    {name: "Главная"},
                    {name: "Профиль пользователя"}
                ]
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
