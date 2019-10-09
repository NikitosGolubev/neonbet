<template>
    <div class="toggle">
        <input :checked="isActive" @change="toggleUsed" class="toggle__checkbox" type="checkbox" name="main_games_switcher" :id="toggleId" />
        <label class="toggle__label" :for="toggleId">
            <span class="toggle__switcher"></span>
        </label>
    </div>
</template>

<script>
    import randomKeyMixin from '../../../shared/mixins/random-key-generator';

    export default {
        name: "VDefaultToggle",
        mixins: [randomKeyMixin],
        computed: {
            toggleId() {
                if (this.toggleKey === null) return this.key;

                return this.toggleKey;
            }
        },
        props: {
            toggleKey: {
                default: null
            },
            toggleState: {
                type: Boolean,
                default: null
            }
        },
        data() {
            return {
                key: this.uniqueKey(),
                isActive: this.getToggleState(),
            }
        },
        methods: {
            getToggleState() {
                if (this.toggleState === null) return false;
                return this.toggleState;
            },

            toggleUsed() {
                this.isActive = !this.isActive;
                if (this.isActive) this.$emit('toggle-on');
                else this.$emit('toggle-false');
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
