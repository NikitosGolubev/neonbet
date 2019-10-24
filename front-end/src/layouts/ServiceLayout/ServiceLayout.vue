<template>
    <div class="service-page">
        <div class="service-page__logo">
            <a href="#">
                <v-animated-logo />
            </a>
        </div>

        <main class="service-page__content">
            <div>
                <slot></slot>
            </div>
        </main>
    </div>
</template>

<script>
    import VAnimatedLogo from "../../components/ui/logos/VAnimatedLogo";

    export default {
        name: "ServiceLayout",
        components: {VAnimatedLogo}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
