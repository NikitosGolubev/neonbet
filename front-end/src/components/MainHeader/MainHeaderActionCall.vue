<template>
    <ul class="header__list header__actions-list">
        <!-- Important social links -->
        <li class="header__actions-list_item">
            <a href="https://vk.com/nikitos_angry_jew" target="_blank">
                <div class="vk-grad item-btn"></div>
            </a>
        </li>

        <!-- Action call buttons -->
        <li class="header__actions-list_item">
            <router-link :to="{name: 'login'}">
                <v-button-outline-simple size="lg">Вход</v-button-outline-simple>
            </router-link>
        </li>
        <li class="header__actions-list_item">
            <router-link :to="{name: 'register'}">
                <v-button-outline-simple size="lg">Регистрация</v-button-outline-simple>
            </router-link>
        </li>

        <li class="header__sidebar-burger">
            <!-- Burger open -->
            <user-sidebar-burger />
        </li>

        <!-- Language picker -->
        <li class="header__actions-list_item header__language-picker">
            <language-picker />
        </li>
    </ul>
</template>

<script>
    import UserSidebarBurger from "../UserSidebar/UserSidebarBurger";
    import LanguagePicker from "../LanguagePicker/LanguagePicker";
    import VButtonOutlineSimple from "../ui/buttons/VButtonOutlineSimple";

    export default {
        name: "MainHeaderActionCall",
        components: {VButtonOutlineSimple, LanguagePicker, UserSidebarBurger}
    }
</script>

<style scoped>

</style>
