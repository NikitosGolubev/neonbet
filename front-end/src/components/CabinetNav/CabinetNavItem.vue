<template>
    <div class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
        <v-button-default class="dashboard-navigation__link-btn">
            {{ item.name }}
        </v-button-default>
    </div>
</template>

<script>
    import NavItemMixin from './mixins/nav-item';
    import VButtonDefault from "../ui/buttons/VButtonDefault";

    export default {
        name: "CabinetNavItem",
        components: {VButtonDefault},
        mixins: [NavItemMixin]
    }
</script>

