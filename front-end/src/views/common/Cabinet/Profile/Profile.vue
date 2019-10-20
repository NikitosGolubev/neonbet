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
                        <user-profile-content :user="user"></user-profile-content>
                    </user-profile>
                </div>
            </panel-section>

            <panel-section>
                <profile-personal-data-form :user="user" />
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
    import MockUser from '../../../../mock-data/user';
    import UserDashboardNav from "../../../../components/CabinetNav/CabinetNav";
    import UserProfile from "../../../../components/UserProfile/UserProfile";
    import UserProfileContent from "../../../../components/UserProfile/PersonalCabinet/UserProfileContent";
    import CabinetLayout from "../../../../layouts/MainLayout/PanelLayout/CabinetLayout/CabinetLayout";
    import PanelSection from "../../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    import PanelTextSubheader from "../../../../layouts/MainLayout/PanelLayout/components/PanelTextSubheader";
    import VButtonOutlineGradientFillable from "../../../../components/ui/buttons/VButtonOutlineGradientFillable";
    import ProfilePersonalDataForm from "./components/ProfilePersonalDataForm";

    export default {
        name: "Profile",
        components: {
            ProfilePersonalDataForm,
            VButtonOutlineGradientFillable,
            PanelTextSubheader,
            PanelSection,
            CabinetLayout,
            UserProfileContent,
            UserProfile,
            UserDashboardNav
        },
        data() {
            return {
                breadcrumbs: [
                    {name: "Главная"},
                    {name: "Профиль пользователя"}
                ],
                user: MockUser
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
