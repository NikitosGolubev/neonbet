<template>
    <main-layout>
        <div>
            <div class="index-content row">
                <section class="index-content__aside col-xs-12 col-lg-4">
                    <section class="index-content__section">
                        <games-filter />
                    </section>

                    <section class="index-content__socials index-content__section">
                        <social-media />
                    </section>

                    <section class="index-content__user-profile index-content__section card">
                        <home-user-profile />
                    </section>

                    <section class="index-content__top-users index-content__section">
                        <top-users />
                    </section>
                </section>

                <section class="index-content__main col-xs-12 col-lg-8">
                    <section class="index-content__section">
                        <main-betting-line />
                    </section>

                    <section class="index-content__section">
                        <additional-betting-line />
                    </section>
                </section>
            </div>
        </div>
        <template #pageAfter>
            <selected-bets />
        </template>
    </main-layout>
</template>

<script>
    import MainLayout from '../../../layouts/MainLayout/MainLayout';
    import GamesFilter from "../../../components/GamesFilter/GamesFilter";
    import SocialMedia from "../../../components/SocialMedia/SocialMedia";
    import AdditionalBettingLine from "../../../components/AdditionalBettingLine/AdditionalBettingLine";
    import MainBettingLine from "../../../components/MainBettingLine/MainBettingLine";
    import TopUsers from "../../../components/TopUsers/TopUsers";
    import HomeUserProfile from "./components/HomeUserProfile";
    import SelectedBets from "../../../components/SelectedBets/SelectedBets";

    export default {
        name: "HomePage",
        components: {
            SelectedBets,
            HomeUserProfile,
            TopUsers,
            MainBettingLine,
            AdditionalBettingLine,
            SocialMedia,
            GamesFilter,
            MainLayout
        }
    }
</script>

<style lang="sass">
    @import 'sass/main'
</style>
