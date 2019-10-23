import RandomKeyMixin from '../../../../shared/mixins/random-key-generator';

export default {
    mixins: [RandomKeyMixin],
    props: {
        value: {
            type: Boolean,
            default: false
        },

        name: {
            type: String,
            default: ''
        }
    },
    methods: {
        checkboxUsed(event) {
            this.$emit('input', event.target.checked);
        }
    },
    data() {
        return {
            checkBoxId: this.uniqueKey()
        }
    }
};
