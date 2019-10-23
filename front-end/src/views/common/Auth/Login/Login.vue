<template>
    <panel-layout :breadcrumbs="breadcrumbs" :include-upper-carousel="false">
        <panel-text-header>
            <h2>Вход:</h2>
        </panel-text-header>

        <section>
            <panel-section>
                <login-form />
            </panel-section>
        </section>
    </panel-layout>
</template>

<script>
    import PanelLayout from "../../../../layouts/MainLayout/PanelLayout/PanelLayout";
    import PanelTextHeader from "../../../../layouts/MainLayout/PanelLayout/components/PanelTextHeader";
    import PanelSection from "../../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    import LoginForm from "./components/LoginForm";

    export default {
        name: "Login",
        components: {LoginForm, PanelSection, PanelTextHeader, PanelLayout},
        data() {
            return {
                breadcrumbs: [
                    {name: "Главная"},
                    {name: "Вход"}
                ]
            }
        }
    }
</script>
