<template>
    <div class="btn btn_muted-text-change" :class="sizeClass">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonMixin from './mixins/button';

    export default {
        name: "VButtonMutedTextChange",
        mixins: [ButtonMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
