<template>
    <div>
        <div class="page_wrap base-container">
            <main-header></main-header>

            <upper-carousel v-if="includeUpperCarousel"></upper-carousel>

            <main>
                <router-view />
            </main>

            <main-footer></main-footer>
        </div>

        <router-view name="pageAfter"/>
    </div>
</template>

<script>
    // Styles
    import '../vue-default.css';

    // Components
    import MainHeader from '../../components/MainHeader/MainHeader';
    import UpperCarousel from '../../components/UpperCarousel/UpperCarousel';
    import MainFooter from '../../components/MainFooter/MainFooter';

    export default {
        name: "MainLayout",
        components: {
            MainHeader,
            UpperCarousel,
            MainFooter
        },
        props: {
            includeUpperCarousel: {
                type: Boolean,
                default: true
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
