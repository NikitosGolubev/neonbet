<template>
    <div class="editable-field_wrap">
        <field-secondary
                ref="field"
                :is-disabled="isFieldDisabled"
                :class="'editable-field'"
                :value="fieldVal"
                :name="fieldName"
        />
        <div @click="adjustFieldState" class="editable-field__icon edit item-btn"></div>
    </div>
</template>

<script>
    import FieldSecondary from "./FieldSecondary";
    export default {
        name: "EditableField",
        props: {
            fieldVal: {
                type: String,
                default: ''
            },

            fieldName: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                isFieldDisabled: true
            }
        },
        computed: {
            field() {
                return this.$refs.field.$el;
            }
        },
        methods: {
            adjustFieldState() {
                this.isFieldDisabled = !this.isFieldDisabled;

                this.adjustFieldActivity();

                this.focusOnField();
            },

            focusOnField() {
                this.field.focus();
            },

            adjustFieldActivity() {
                this.field.disabled = this.isFieldDisabled;
            }
        },
        mounted() {
            this.adjustFieldActivity();
        },
        components: {FieldSecondary}
    }
</script>

<style scoped>

</style>