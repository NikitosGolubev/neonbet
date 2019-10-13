<template>
    <nav class="responsive-sidebar__nav">
        <ul>
            <li class="responsive-sidebar__nav-item">
                <a class="link_alternative" href="#">Тех. поддержка</a>
            </li>
            <li class="responsive-sidebar__nav-item">
                <a class="link_alternative" href="#">Общие вопросы</a>
            </li>
            <li class="responsive-sidebar__nav-item">
                <a class="link_alternative" href="#">Новости</a>
            </li>
            <li class="responsive-sidebar__nav-item">
                <a class="responsive-sidebar__auth-btn" href="#">
                    <v-button-outline-gradient-fillable>Вход</v-button-outline-gradient-fillable>
                </a>

                <a class="responsive-sidebar__auth-btn" href="#">
                    <v-button-outline-gradient-fillable>Регистрация</v-button-outline-gradient-fillable>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
    import VButtonOutlineGradientFillable from "../ui/buttons/VButtonOutlineGradientFillable";
    export default {
        name: "UserSidebarNav",
        components: {VButtonOutlineGradientFillable}
    }
</script>

<style scoped>

</style>
