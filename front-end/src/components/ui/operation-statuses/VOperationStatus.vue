<template>
    <div class="operation-status">
        <div class="operation-status__representation" :class="modeClass"></div>
        <div class="operation-status__text">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: "VOperationStatus",
        props: {
            mode: {
                type: String,
                default: "dull"
            }
        },
        computed: {
            modeClass() {
                return 'operation-status__representation_'+this.mode;
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
