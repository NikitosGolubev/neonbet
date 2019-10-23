<template>
    <panel-layout :include-upper-carousel="false" :breadcrumbs="breadcrumbs">
        <panel-text-header>
            <h2>Восстановление пароля:</h2>
        </panel-text-header>

        <section>
            <panel-section>
                <password-recovery-form />
            </panel-section>
        </section>
    </panel-layout>
</template>

<script>
    import PanelLayout from "../../../../layouts/MainLayout/PanelLayout/PanelLayout";
    import PanelTextHeader from "../../../../layouts/MainLayout/PanelLayout/components/PanelTextHeader";
    import PanelSection from "../../../../layouts/MainLayout/PanelLayout/components/PanelSection";
    import PasswordRecoveryForm from "./components/PasswordRecoveryForm";

    export default {
        name: "PasswordRecovery",
        components: {PasswordRecoveryForm, PanelSection, PanelTextHeader, PanelLayout},
        data() {
            return {
                breadcrumbs: [
                    {name: "Главная"},
                    {name: "Восстановление пароля"}
                ]
            }
        }
    }
</script>
