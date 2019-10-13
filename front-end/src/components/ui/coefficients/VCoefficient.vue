<template>
    <div class="coefficient" :class="coefClasses">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: "VCoefficient",
        props: {
            isBig: {
                type: Boolean,
                default: false
            },

            isPlain: {
                type: Boolean,
                default: false
            }
        },
        computed: {
            coefClasses() {
                return {
                    'coefficient_big': this.isBig,
                    'coefficient_plain': this.isPlain
                };
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
