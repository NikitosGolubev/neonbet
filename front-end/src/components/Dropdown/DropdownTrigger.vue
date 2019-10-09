<!-- Mostly abstract component, however, it may be used it some particular
occasions where dropdown-trigger is unique and will unlikely ever repeat -->

<template>
    <div @click="adjustDropdown">
        <!-- Dropdown trigger element here -->
        <div v-if="!isOpened || !isClosedSlotPassed">
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
        name: "DropdownTrigger",
        mixins: [dropdownTriggerMixin],
        computed: {
            isClosedSlotPassed() {
                return !!this.$slots['closed'];
            }
        }
    }
</script>