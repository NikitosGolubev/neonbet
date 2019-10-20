<template>
    <div class="editable-field_wrap">
        <span ref="field" class="js-editable_field__input-scope">
            <slot></slot>
        </span>

        <v-button-item @click.native="adjustFieldState">
            <div class="editable-field__icon edit"></div>
        </v-button-item>
    </div>
</template>

<script>
    import VButtonItem from "../ui/buttons/VButtonItem";
    export default {
        name: "EditableField",
        components: {VButtonItem},
        data() {
            return {
                isFieldDisabled: true
            }
        },
        computed: {
            field() {
                let field = this.$refs.field.querySelector('input');

                if (!field) field = this.$refs.field.querySelector('textarea');

                return field;
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
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
