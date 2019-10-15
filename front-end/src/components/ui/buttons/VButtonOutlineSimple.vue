<template>
    <div class="btn btn_outline-simple" :class="sizeClass">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonSizeMixin from './mixins/button-size';

    export default {
        name: "VButtonOutlineSimple",
        mixins: [ButtonSizeMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
