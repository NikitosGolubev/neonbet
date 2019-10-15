ButtonSizeMixin<template>
    <div class="btn btn_outline-simple-fillable" :class="sizeClass">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonSizeMixin from './mixins/button-size';

    export default {
        name: "VButtonOutlineSimpleFillable",
        mixins: [ButtonSizeMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
