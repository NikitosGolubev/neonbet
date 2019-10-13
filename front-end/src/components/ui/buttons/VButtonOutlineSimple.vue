<template>
    <div class="btn btn_outline-simple" :class="sizeClass">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonMixin from './mixins/button';

    export default {
        name: "VButtonOutlineSimple",
        mixins: [ButtonMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
