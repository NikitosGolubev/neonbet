<template>
    <textarea
            ref="input"
            :class="[{'field_error': isError}, disabledClasses]"
            class="field field_textarea"
            :disabled="isDisabled"
            @input="$parent.$emit('inputChanged', $event.target.value)"
    >
    </textarea>
</template>

<script>
    import AbstractFieldMixin from './mixins/abstract-field';

    export default {
        name: "VTextarea",
        mixins: [AbstractFieldMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>

