<template>
    <div class="btn btn_result-disabled" :size="sizeClass">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonMixin from './mixins/button';

    export default {
        name: "VButtonResultDisabled",
        mixins: [ButtonMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
