<template>
    <v-textarea
            :error-message="errorMessage"
            :disabled-classes="disabledClasses"
            :is-disabled="isDisabled"
            class="field_secondary"
            :class="stableStylingClasses"
    />
</template>

<script>
    import SecondaryFieldMixin from './mixins/secondary-field';
    import VTextarea from "./VTextarea";

    export default {
        name: "VTextareaSecondary",
        components: {VTextarea},
        mixins: [SecondaryFieldMixin]
    }
</script>

<style scoped>

</style>
