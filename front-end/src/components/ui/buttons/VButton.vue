<template>
    <div class="btn" :class="[sizeClass, modeClass]">
        <slot></slot>
    </div>
</template>

<script>
    import ButtonSizeMixin from './mixins/button-size';

    export default {
        name: "VButton",
        mixins: [ButtonSizeMixin],
        props: {
            mode: {
                type: String,
                default: 'default'
            }
        },
        computed: {
            modeClass() {
                return 'btn_'+this.mode;
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
