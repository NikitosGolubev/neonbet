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
    import ButtonMixin from './mixins/button';

    export default {
        name: "VButtonOutlineGradientFillable",
        mixins: [ButtonMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
