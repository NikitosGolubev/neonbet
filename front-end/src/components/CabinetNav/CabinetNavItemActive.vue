<template>
    <div class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
        <router-link :to="item.url" class="dashboard-navigation__link">
            <v-button-outline-gradient-fillable-muted class="dashboard-navigation__link_btn">
                {{ item.name }}
            </v-button-outline-gradient-fillable-muted>
        </router-link>
    </div>
</template>

<script>
    import NavItemMixin from './mixins/nav-item';
    import VButtonOutlineGradientFillableMuted from "../ui/buttons/VButtonOutlineGradientFillableMuted";

    export default {
        name: "CabinetNavItemActive",
        components: {VButtonOutlineGradientFillableMuted},
        mixins: [NavItemMixin]
    }
</script>
