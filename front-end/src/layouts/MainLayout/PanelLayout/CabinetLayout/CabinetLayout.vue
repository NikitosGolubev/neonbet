<template>
    <panel-layout :breadcrumbs="breadcrumbs" :include-upper-carousel="includeUpperCarousel">
        <div>
            <panel-text-header>
                <h2>Личный кабинет</h2>
            </panel-text-header>

            <cabinet-nav />

            <slot></slot>
        </div>

        <template #afterMain>
            <slot name="afterMain"></slot>
        </template>
    </panel-layout>
</template>

<script>
    import MainLayoutMixin from '../../mixins/main-layout';
    import PanelLayoutMixin from '../mixins/panel-layout';
    import PanelLayout from "../PanelLayout";
    import CabinetNav from "../../../../components/CabinetNav/CabinetNav";
    import PanelTextHeader from "../components/PanelTextHeader";

    export default {
        name: "CabinetLayout",
        components: {PanelTextHeader, CabinetNav, PanelLayout},
        mixins: [MainLayoutMixin, PanelLayoutMixin]
    }
</script>
