<template>
    <v-field
            :error-message="errorMessage"
            :disabled-classes="disabledClasses"
            :is-disabled="isDisabled"
            class="field_muted"
    />
</template>

<script>
    import FieldMixin from './mixins/field';
    import VField from "./VField";

    export default {
        name: "VFieldMuted",
        components: {VField},
        mixins: [FieldMixin],
        props: {
            disabledClasses: {
                type: Array,
                default: () => []
            }
        }
    }
</script>

<style scoped>

</style>
