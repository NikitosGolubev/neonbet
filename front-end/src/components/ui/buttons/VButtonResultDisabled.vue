<template>
    <div class="btn btn_result-disabled" :size="sizeClass">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonSizeMixin from './mixins/button-size';

    export default {
        name: "VButtonResultDisabled",
        mixins: [ButtonSizeMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
