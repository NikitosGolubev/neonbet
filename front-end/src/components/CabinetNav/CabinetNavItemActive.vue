<template>
    <div class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
        <router-link :to="item.url" class="dashboard-navigation__link">
            <v-button mode="default" class="dashboard-navigation__link_btn">
                {{ item.name }}
            </v-button>
        </router-link>
    </div>
</template>

<script>
    import NavItemMixin from './mixins/nav-item';
    import VButton from "../ui/buttons/VButton";

    export default {
        name: "CabinetNavItemActive",
        components: {VButton},
        mixins: [NavItemMixin]
    }
</script>
