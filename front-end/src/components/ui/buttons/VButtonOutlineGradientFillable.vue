<template>
    <div class="btn__outline-gradient-fillable_wrap">
        <div class="btn btn__outline-gradient-fillable" :class="sizeClass">
            <span class="btn__outline-gradient-fillable_text">
                <slot></slot>
            </span>
        </div>
        <div class="btn__outline-gradient-fillable_border"></div>
    </div>
</template>

<script>
    import ButtonSizeMixin from './mixins/button-size';

    export default {
        name: "VButtonOutlineGradientFillable",
        mixins: [ButtonSizeMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
