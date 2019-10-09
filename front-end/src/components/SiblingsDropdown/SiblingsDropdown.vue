<template>
    <span ref="dropdown">
        <slide-up-down v-if="isDropdownNecessary" @open-start="openStart" @close-end="closeEnd" @close-start="closeStart"  :active="isDropdownActive">
            <slot></slot>
        </slide-up-down>
        <span v-else>
            <slot></slot>
        </span>
    </span>
</template>

<script>
    // mixins
    import mainMixin from './mixins/main';
    import tableDropdownSupportMixin from './mixins/table-dropdown-support';
    import windowSizeTrackerMixin from '../../shared/mixins/window-size-tracker';

    // event-bus
    import DropdownEventBus from './dropdown-event-bus';

    // npm packages
    import SlideUpDown from 'vue-slide-up-down';

    export default {
        name: "SiblingsDropdown",
        mixins: [mainMixin, tableDropdownSupportMixin, windowSizeTrackerMixin],
        components: {
            SlideUpDown
        },
        props: {
            _is_active: {
                type: Boolean,
                default: false
            },
            applyDropdownAt: {
                type: Number,
                default: 0
            }
        },
        computed: {
            isDropdownNecessary() {
                if (this.applyDropdownAt === 0) return true;

                return this.applyDropdownAt >= this.windowWidth;
            }
        },
        data() {
            let data = {};

            // To avoid warn message about mutating prop directly
            data = Object.assign({}, data, {isDropdownActive: this._is_active});
            return data;
        },
        methods: {
            adjustDropdown() {
                this.isDropdownActive = !this.isDropdownActive;
            },

            notifyDropdownState() {
                DropdownEventBus.$emit(this.dropdownUpdatedEventName, {
                    isDropdownActive: this.isDropdownActive,
                    keyId: this.keyId
                });
            },

            openStart() {
                this.adjustDropdownTableWrapperVisibility();
                this.notifyDropdownState();
            },

            closeStart() {
                this.notifyDropdownState();
            },

            closeEnd() {
                this.adjustDropdownTableWrapperVisibility();
            }
        },
        created() {
            DropdownEventBus.$on(this.triggerEventName, (triggerKey) => {
                if (this.keyId === triggerKey) this.adjustDropdown();
            });

            this.notifyDropdownState();
        }
    }
</script>

<style scoped>

</style>
