<template>
    <tr>
        <td>
            <div class="betting-history__details-dropdown">
                <dropdown-gradient-trigger :key-id="dropdownKey" />
            </div>
        </td>
    </tr>
</template>

<script>
    import DropdownConfigMixin from '../../../shared/mixins/dropdown-config';

    import DropdownGradientTrigger from "../../SiblingsDropdown/trigger-variations/SiblingsDropdownGradientTrigger";

    export default {
        name: "UserBetDetailsDropdownTrigger",
        components: {DropdownGradientTrigger},
        mixins: [DropdownConfigMixin]
    }
</script>
