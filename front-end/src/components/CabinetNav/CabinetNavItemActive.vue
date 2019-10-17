<template>
    <div v-else class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
        <v-button-outline-gradient-fillable-muted class="dashboard-navigation__link-btn">
            {{ item.name }}
        </v-button-outline-gradient-fillable-muted>
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
