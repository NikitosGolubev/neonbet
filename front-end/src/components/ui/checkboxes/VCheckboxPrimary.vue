<template>
    <div class="primary-checkbox">
        <div v-if="isPositionLeft" class="primary-checkbox__text-label primary-checkbox__text-label_left">
            <slot></slot>
        </div>
        <div class="primary-checkbox__container">
            <input :checked="value" @change="checkboxUsed" :id="checkBoxId" :name="name" class="primary-checkbox__input" type="checkbox" />
            <label class="primary-checkbox__label" :for="checkBoxId"></label>
        </div>
        <div v-if="isPositionRight" class="primary-checkbox__text-label primary-checkbox__text-label_right">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    import CheckboxMixin from './mixins/checkbox';

    export default {
        name: "VCheckboxPrimary",
        mixins: [CheckboxMixin],
        props: {
            textPosition: {
                type: String,
                default: 'right'
            }
        },
        computed: {
            isPositionRight() {
                return this.textPosition === 'right';
            },

            isPositionLeft() {
                return this.textPosition === 'left';
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
