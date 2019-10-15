<template>
    <div class="btn" :class="[sizeClass, btnClasses]">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonSizeMixin from './mixins/button-size';

    export default {
        name: "VButtonFillableGradient",
        mixins: [ButtonSizeMixin],
        props: {
            isActive: {
                default: false,
                type: Boolean
            }
        },
        computed: {
            btnClasses() {
                if (this.isActive) return 'btn_fillable-gradient-active';
                return 'btn_fillable-gradient';
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
