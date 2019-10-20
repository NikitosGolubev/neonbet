<template>
    <input
            ref="input"
            :class="[{'field_error': isError}, disabledClasses]"
            class="field"
            :disabled="isDisabled"
            @input="$parent.$emit('inputChanged', $event.target.value)"
    />
</template>

<script>
    import FieldMixin from './mixins/field';
    import ErrorPrintingMixin from './mixins/error-printer';

    export default {
        name: "VField",
        mixins: [ErrorPrintingMixin, FieldMixin],
        props: {
            disabledClasses: {
                type: Array,
                default: []
            }
        }
    }
</script>

<style scoped>

</style>
