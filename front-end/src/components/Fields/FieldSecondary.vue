<template>
    <input ref="input" :class="[{'field_error': isError}, disabledClass]" class="field field_secondary" type="text" />
</template>

<script>
    export default {
        name: "FieldSecondary",
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
        computed: {
            disabledClass() {
                return this.isDisabled ? 'field_secondary-disabled' : '';
            },

            isError() {
                return !!this.errorMessage;
            },

            errorBlock() {
                let errorBlock = document.createElement('div');
                errorBlock.classList.add('field-error-msg');
                let errorMessage = document.createTextNode(this.errorMessage);
                errorBlock.appendChild(errorMessage);
                return errorBlock;
            }
        },
        methods: {
            displayErrorMessage() {
                if (this.isError) {
                    const input = this.$refs.input;
                    const inputNextSibling = input.nextElementSibling;
                    const inputParent = input.parentNode;

                    if (inputNextSibling) inputParent.insertBefore(this.errorBlock, inputNextSibling);
                    else inputParent.appendChild(this.errorBlock);
                }
            }
        },
        mounted() {
           this.displayErrorMessage();
        }
    }
</script>

<style scoped>

</style>