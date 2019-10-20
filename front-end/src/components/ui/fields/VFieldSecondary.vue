<template>
    <v-field
            :error-message="errorMessage"
            :disabled-classes="disabledClasses"
            :is-disabled="isDisabled"
            class="field_secondary"
    />
</template>

<script>
    import FieldMixin from './mixins/field';
    import VField from "./VField";

    export default {
        name: "VFieldSecondary",
        components: {VField},
        mixins: [FieldMixin],
        props: {
            disabledClasses: {
                type: Array,
                default: () => ['field_secondary-disabled']
            }
        }
    }
</script>

<style scoped>

</style>
