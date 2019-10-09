<template>
    <dropdown-trigger>
        <div class="dropdown-arrow dropdown-arrow_open"></div>

        <template #closed>
            <div class="dropdown-arrow dropdown-arrow_close"></div>
        </template>
    </dropdown-trigger>
</template>

<script>
    // Mixins
    import dropdownTriggerMixin from '../mixins/dropdown-trigger';

    // Components
    import DropdownTrigger from "../DropdownTrigger";

    export default {
        name: "DropdownGradientTrigger",
        components: {DropdownTrigger},
        mixins: [dropdownTriggerMixin]
    }
</script>

<style scoped>

</style>