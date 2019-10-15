<template>
    <div class="side-btn" :class="gradientClasses">
        <slot name="beforeContent"></slot>
        <div class="side-btn__text"><slot></slot></div>
        <slot name="afterContent"></slot>
    </div>
</template>

<script>
    export default {
        name: "VButtonSide",
        props: {
            isGradient: {
                default: false,
                type: Boolean
            }
        },
        computed: {
            gradientClasses() {
                return {'side-btn_gradient': this.isGradient};
            }
        }
    }
</script>

<style scoped>

</style>
