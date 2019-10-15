<template>
    <div class="btn btn_muted-text-change" :class="sizeClass">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonSizeMixin from './mixins/button-size';

    export default {
        name: "VButtonMutedTextChange",
        mixins: [ButtonSizeMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
