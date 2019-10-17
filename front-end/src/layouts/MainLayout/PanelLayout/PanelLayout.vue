<template>
    <main-layout :include-upper-carousel="includeUpperCarousel">
        <panel-content-container class="card">

            <panel-content-container-header class="card__header">
                <v-breadcrumbs :data="breadcrumbs" />
            </panel-content-container-header>

            <panel-content-container-content class="card__content">
                <slot></slot>
            </panel-content-container-content>

        </panel-content-container>

        <slot name="afterMain"></slot>
    </main-layout>
</template>

<script>
    import MainLayout from "../MainLayout";
    import MainLayoutMixin from '../mixins/main-layout';
    import PanelLayoutMixin  from './mixins/panel-layout';
    import VBreadcrumbs from "../../../components/ui/breadcrumbs/VBreadcrumbs";
    import PanelContentContainer from "./components/PanelContentContainer";
    import PanelContentContainerHeader from "./components/PanelContentContainerHeader";
    import PanelContentContainerContent from "./components/PanelContentContainerContent";

    export default {
        name: "PanelLayout",
        components: {
            PanelContentContainerContent,
            PanelContentContainerHeader, PanelContentContainer, VBreadcrumbs, MainLayout},
        mixins: [MainLayoutMixin, PanelLayoutMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
