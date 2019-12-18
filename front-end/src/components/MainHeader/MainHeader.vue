<template>
    <div>
        <header class="header page__header">
            <router-link :to="{name: 'home'}">
                <v-animated-logo />
            </router-link>

            <div class="header__central-nav">
                <header-central-navigation />
            </div>

            <div>
                <main-header-action-call />
            </div>
        </header>

        <user-sidebar />
    </div>
</template>

<script>
    import HeaderCentralNavigation from './MainHeaderCentralNav';
    import UserSidebar from "../UserSidebar/UserSidebar";
    import MainHeaderActionCall from "./MainHeaderActionCall";
    import VAnimatedLogo from "../ui/logos/VAnimatedLogo";


    export default {
        name: "MainHeader",
        components: {
            VAnimatedLogo,
            MainHeaderActionCall,
            UserSidebar,
            HeaderCentralNavigation
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
