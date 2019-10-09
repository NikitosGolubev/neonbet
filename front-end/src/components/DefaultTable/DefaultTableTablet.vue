<template>
    <div v-show="isVisible" v-observe-visibility="visibilityChanged" class="table-manager__tablet">
        <div v-html="tableHTML"></div>
    </div>
</template>

<script>
    // Mixins
    import tabletMixin from './mixins/tablet';

    export default {
        name: "DefaultTableTablet",
        mixins: [tabletMixin]
    }
</script>

<style scoped>

</style>