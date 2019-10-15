<template>
    <div class="btn btn_fillable-simple" :class="[sizeClass, btnClasses]">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonSizeMixin from './mixins/button-size';

    export default {
        name: "VButtonFillableSimple",
        mixins: [ButtonSizeMixin],
        props: {
            isActive: {
                default: false,
                type: Boolean
            }
        },
        computed: {
            btnClasses() {
                if (this.isActive) return 'btn_fillable-simple-active';
                return 'btn_fillable-simple';
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
