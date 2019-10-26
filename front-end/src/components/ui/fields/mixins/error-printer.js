import RandomKeyMixin from '../../../../shared/mixins/random-key-generator';

export default {
    mixins: [RandomKeyMixin],
    props: {
        errorMessage: {
            type: String,
            default: null
        }
    },
    data() {
        return {
            errorBlockId: this.uniqueKey()
        }
    },
    computed: {
        isError() {
            return !!this.errorMessage;
        },

        errorBlock() {
            let errorBlock = document.createElement('div');
            errorBlock.classList.add('field-error-msg');
            let errorMessage = document.createTextNode(this.errorMessage);
            errorBlock.appendChild(errorMessage);
            errorBlock.id = this.errorBlockId;
            return errorBlock;
        }
    },
    methods: {
        removeErrorBlock() {
            let errorBlock = document.getElementById(this.errorBlockId);
            if (errorBlock) errorBlock.parentNode.removeChild(errorBlock);
        },

        displayErrorBlock() {
            const input = this.$refs.input;
            const inputNextSibling = input.nextElementSibling;
            const inputParent = input.parentNode;

            if (inputNextSibling) inputParent.insertBefore(this.errorBlock, inputNextSibling);
            else inputParent.appendChild(this.errorBlock);
        }
    },
    watch: {
        isError(newVal) {
            if (newVal) {
                this.displayErrorBlock();
            } else {
                this.removeErrorBlock();
            }
        },

        errorMessage(newVal) {
            if (newVal !== null) {
                this.removeErrorBlock();
                this.displayErrorBlock();
            }
        }
    },
    mounted() {
        if (this.isError) this.displayErrorBlock();
    }
};
