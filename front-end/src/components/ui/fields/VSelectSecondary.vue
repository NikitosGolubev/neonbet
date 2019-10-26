<template>
    <v-select
            :error-message="errorMessage"
            :disabled-classes="disabledClasses"
            :is-disabled="isDisabled"
            class="field_secondary"
            :class="stableStylingClasses"
    >
        <slot></slot>
    </v-select>
</template>

<script>
    import SecondaryFieldMixin from './mixins/secondary-field';
    import VSelect from "./VSelect";

    export default {
        name: "VSelectSecondary",
        components: {VSelect},
        mixins: [SecondaryFieldMixin]
    }
</script>

<style scoped>

</style>
