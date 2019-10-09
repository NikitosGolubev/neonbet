export default {
    props: {
        keyId: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            triggerEventName: 'dropdown-trigger-used',
            dropdownUpdatedEventName: 'dropdown-state-changed'
        }
    }
};