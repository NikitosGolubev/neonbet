<template>
    <el-row class="admin-panel">
        <div class="admin-panel__nav">
            <main-nav @change="adjustMenu" :is-collapse="isMenuOpened" />
        </div>

        <div class="admin-panel__main" ref="mainContainer" :class="mainContentPositioningClass">
            <main-header class="admin-panel__header" />

            <el-main class="admin-panel__content">
                <slot></slot>
            </el-main>
        </div>
    </el-row>
</template>

<script>
    import MainNav from "../../components-admin/MainNav/MainNav";
    import MenuManagerMixin from './mixins/menu-manager';
    import MainHeader from "../../components-admin/MainHeader/MainHeader";

    export default {
        name: "AdminLayout",
        components: {MainHeader, MainNav},
        mixins: [MenuManagerMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>

