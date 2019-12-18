<template>
    <nav class="responsive-sidebar__nav">
        <ul>
            <li class="responsive-sidebar__nav-item">
                <router-link :to="{name: 'home'}">
                    <span class="link_alternative">Главная</span>
                </router-link>
            </li>
            <li class="responsive-sidebar__nav-item">
                <router-link :to="{name: 'support'}">
                    <span class="link_alternative">Тех. поддержка</span>
                </router-link>
            </li>
            <li class="responsive-sidebar__nav-item">
                <router-link to="#">
                    <span class="link_alternative">Общие вопросы</span>
                </router-link>
            </li>
            <li class="responsive-sidebar__nav-item">
                <router-link :to="{name: 'article'}">
                    <span class="link_alternative">Новости</span>
                </router-link>
            </li>
            <li class="responsive-sidebar__nav-item">
                <router-link :to="{name: 'login'}">
                    <div class="responsive-sidebar__auth-btn">
                        <v-button-outline-gradient-fillable>Вход</v-button-outline-gradient-fillable>
                    </div>
                </router-link>

                <router-link :to="{name: 'register'}">
                    <div class="responsive-sidebar__auth-btn">
                        <v-button-outline-gradient-fillable>Регистрация</v-button-outline-gradient-fillable>
                    </div>
                </router-link>
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
