<template>
    <div>
        <div class="page_wrap base-container">
            <main-header></main-header>

            <upper-carousel v-if="includeUpperCarousel"></upper-carousel>

            <main>
                <slot></slot>
            </main>

            <main-footer></main-footer>
        </div>

        <slot name="pageAfter"></slot>
    </div>
</template>

<script>
    import MainLayoutMixin from './mixins/main-layout';

    import '../vue-default.css';

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
        mixins: [MainLayoutMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
