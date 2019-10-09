import DropdownEventBus from '../dropdown-event-bus';

import mainMixin from './main';

/**
 * Functionality of dropdown trigger.
 */
export default {
    mixins: [mainMixin],
    methods: {
        triggerUsed() {
            DropdownEventBus.$emit(this.triggerEventName, this.keyId);
        }
    },
    data() {
        return {
            isActive: false
        }
    },
    created() {
        DropdownEventBus.$on(this.dropdownUpdatedEventName, ({keyId, isDropdownActive}) => {
            if (this.keyId === keyId) {
                this.isActive = isDropdownActive;
            }
        });
    }
};