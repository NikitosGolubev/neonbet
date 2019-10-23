<template>
    <panel-layout :include-upper-carousel="false" :breadcrumbs="breadcrumbs">
        <panel-text-header>
            <h2>Регистрация:</h2>
        </panel-text-header>

        <section class="user-registration">
            <panel-section>
                <register-form />
            </panel-section>
        </section>
    </panel-layout>
</template>

<script>
    import PanelLayout from "../../../../layouts/MainLayout/PanelLayout/PanelLayout";
    import PanelTextHeader from "../../../../layouts/MainLayout/PanelLayout/components/PanelTextHeader";
    import PanelSection from "../../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    import RegisterForm from "./components/RegisterForm";

    export default {
        name: "Register",
        components: {RegisterForm, PanelSection, PanelTextHeader, PanelLayout},
        data() {
            return {
                breadcrumbs: [
                    {name: 'Главная'},
                    {name: 'Регистрация'}
                ]
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
