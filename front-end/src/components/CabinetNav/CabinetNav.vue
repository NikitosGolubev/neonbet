<template>
    <nav class="dashboard-navigation">
        <div class="dashboard-navigation__dropdown-presentation">
            <div class="h4-m0">Меню</div>
            <dropdown-gradient-trigger :key-id="dropdownKey" />
        </div>

        <dropdown-element :key-id="dropdownKey" :apply-dropdown-at="993" >
            <div class="row dashboard-navigation__dropdown">
                <template v-for="item in menu">
                    <cabinet-nav-item-active v-if="isRouteActive(item.url)"  :item="item" />
                    <cabinet-nav-item v-else :item="item" />
                </template>
            </div>
        </dropdown-element>
    </nav>
</template>

<script>
    import RandomKeyMixin from '../../shared/mixins/random-key-generator';
    import RoutingHelperMixin from '../../shared/mixins/routing-handle-helper';

    import DropdownElement from "../SiblingsDropdown/SiblingsDropdown";
    import DropdownGradientTrigger from "../SiblingsDropdown/trigger-variations/SiblingsDropdownGradientTrigger";
    import CabinetNavItem from "./CabinetNavItem";
    import CabinetNavItemActive from "./CabinetNavItemActive";

    export default {
        name: "CabinetNav",
        components: {
            CabinetNavItemActive,
            CabinetNavItem,
            DropdownGradientTrigger,
            DropdownElement
        },
        mixins: [RandomKeyMixin, RoutingHelperMixin],
        data() {
            return {
                dropdownKey: this.uniqueKey(),
                menu: [
                    {
                        name: "Профиль",
                        url: "/cabinet"
                    },
                    {
                        name: "Cделать депозит",
                        url: "/cabinet/deposit"
                    },
                    {
                        name: "Вывод средств",
                        url: "/cabinet/withdrawal"
                    },
                    {
                        name: "История ставок",
                        url: "/cabinet/betting-history"
                    }
                ]
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
