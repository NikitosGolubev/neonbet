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
    import AbstractFieldMixin from './mixins/abstract-field';

    export default {
        name: "VField",
        mixins: [AbstractFieldMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
