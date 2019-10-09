<template>
    <siblings-dropdown-trigger :key-id="keyId">
        <template #default>
            <div class="dropdown-arrow dropdown-arrow_open"></div>
        </template>
        <template #closed>
            <div class="dropdown-arrow dropdown-arrow_close"></div>
        </template>
    </siblings-dropdown-trigger>
</template>

<script>
    // Mixins
    import dropdownTriggerMixin from '../mixins/dropdown-trigger';

    // Components
    import SiblingsDropdownTrigger from "../SiblingsDropdownTrigger";

    export default {
        name: "SiblingsDropdownGradientTrigger",
        components: {SiblingsDropdownTrigger},
        mixins: [dropdownTriggerMixin]
    }
</script>

<style scoped>

</style>