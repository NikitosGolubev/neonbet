<template>
    <panel-layout :include-upper-carousel="false" :breadcrumbs="breadcrumbs">
        <panel-text-header>
            <h2>Забыли пароль?</h2>
        </panel-text-header>

        <section>
            <panel-section>
                <forget-password-form />
            </panel-section>
        </section>
    </panel-layout>
</template>

<script>
    import PanelLayout from "../../../../layouts/MainLayout/PanelLayout/PanelLayout";
    import PanelTextHeader from "../../../../layouts/MainLayout/PanelLayout/components/PanelTextHeader";
    import ForgetPasswordForm from "./components/ForgetPasswordForm";
    import PanelSection from "../../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    export default {
        name: "ForgetPassword",
        components: {PanelSection, ForgetPasswordForm, PanelTextHeader, PanelLayout},
        data() {
            return {
                breadcrumbs: [
                    {name: 'Главная'},
                    {name: 'Забыли пароль?'}
                ]
            }
        }
    }
</script>
