<template>
    <div class="btn__outline-gradient-fillable_wrap">
        <div class="btn btn__outline-gradient-fillable btn__outline-gradient-fillable_muted" :class="sizeClass">
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
        name: "VButtonOutlineGradientFillableMuted",
        mixins: [ButtonSizeMixin]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
