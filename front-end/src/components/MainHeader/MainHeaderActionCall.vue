<template>
    <ul class="header__list header__actions-list">
        <!-- Important social links -->
        <li class="header__actions-list_item">
            <a href="#">
                <div class="vk-grad item-btn"></div>
            </a>
        </li>

        <!-- Action call buttons -->
        <li class="header__actions-list_item">
            <a class="btn btn_outline-simple btn_lg" href="#">
                Вход
            </a>
        </li>
        <li class="header__actions-list_item">
            <a class="btn btn_outline-simple btn_lg" href="#">
                Регистрация
            </a>
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

    export default {
        name: "MainHeaderActionCall",
        components: {LanguagePicker, UserSidebarBurger}
    }
</script>

<style scoped>

</style>
