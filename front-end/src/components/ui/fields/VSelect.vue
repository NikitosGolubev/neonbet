<template>
    <select
            ref="input"
            :class="[{'field_error': isError}, disabledClasses]"
            class="field field_select"
            :disabled="isDisabled"
            @input="$parent.$emit('inputChanged', $event.target.value)"
    >
        <slot></slot>
    </select>
</template>

<script>
    import AbstractFieldMixin from './mixins/abstract-field';

    export default {
        name: "VSelect",
        mixins: [AbstractFieldMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
