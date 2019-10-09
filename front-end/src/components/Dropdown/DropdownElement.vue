<template>
    <div>
        <!-- Dropdown preview AND DROPDOWN TRIGGER COMPONENT -->
        <slot></slot>

        <!-- Dropdown content -->
        <slide-up-down v-if="isDropdownNecessary" :active="isOpened" :duration="animationDuration">
             <slot name="dropdown"></slot>
        </slide-up-down>
        <div v-else>
            <slot name="dropdown"></slot>
        </div>
    </div>
</template>

<script>
    import SlideUpDown from 'vue-slide-up-down';

    export default {
        name: "DropdownElement",
        data() {
            return {
                animationDuration: 500,
                windowWidth: 0
            }
        },
        props: {
            isOpened: {
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
        components: {
            'slide-up-down': SlideUpDown
        },
        methods: {
            adjustDropdown() {
                this.isOpened = !this.isOpened;
            },

            windowResizeDetector() {
                this.windowWidth = window.innerWidth;
            }
        },
        created() {
            window.addEventListener('resize', this.windowResizeDetector);
            this.windowResizeDetector();
        },
        mounted: function () {
            // Comes from DropdownTrigger component which is EXPECTED TO BE PLACED WITH DROPDOWN PREVIEW
            this.$on('adjust-dropdown', this.adjustDropdown);
        },
        destroyed() {
            window.removeEventListener('resize', this.windowResizeDetector);
        }
    }
</script>