export default {
    props: {
        isDisabled: {
            type: Boolean,
            default: false
        },

        errorMessage: {
            type: String,
            default: null
        }
    },
    created() {
        // Makes V-MODEL work.
        this.$on('inputChanged', (data) => {
            this.$emit('input', data);
        });
    }
};
