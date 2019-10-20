<template>
    <div class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
        <router-link :to="item.url" class="dashboard-navigation__link">
            <v-button-default class="dashboard-navigation__link_btn">
                {{ item.name }}
            </v-button-default>
        </router-link>
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

