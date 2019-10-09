<template>
    <div @click="triggerUsed">
        <div v-if="!isActive || !isClosedSlotPassed">
            <slot></slot>
        </div>
        <div v-else>
            <slot name="closed"></slot>
        </div>
    </div>
</template>

<script>
    import dropdownTriggerMixin from './mixins/dropdown-trigger';

    export default {
        name: "SiblingsDropdownTrigger",
        mixins: [dropdownTriggerMixin],
        computed: {
            isClosedSlotPassed() {
                return !!this.$slots['closed'];
            }
        }
    }
</script>

<style scoped>

</style>