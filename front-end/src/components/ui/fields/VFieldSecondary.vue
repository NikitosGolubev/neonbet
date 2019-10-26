<template>
    <v-field
            :error-message="errorMessage"
            :disabled-classes="disabledClasses"
            :is-disabled="isDisabled"
            class="field_secondary"
            :class="stableStylingClasses"
    />
</template>

<script>
    import SecondaryFieldMixin from './mixins/secondary-field';
    import VField from "./VField";

    export default {
        name: "VFieldSecondary",
        components: {VField},
        mixins: [SecondaryFieldMixin]
    }
</script>

<style scoped>

</style>
