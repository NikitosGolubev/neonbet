const dropdownTriggerMixin = {
    computed: {
        isOpened() {
            return this.$parent.isOpened;
        }
    },
    methods: {
        /**
         * It's important to use here this.$parent.$emit because I'm not sure, where
         * dropdown trigger component may be placed at HTML code (assuming we have a lot of different dropdowns),
         * so I've decided to tightly couple Dropdown and DropdownTrigger which would require client
         * to pass two component in HTML. One with dropdown - actual content, and specified component for trigger btn.
         * That makes usage of dropdown unified as a component.
         *
         * However, if I would ever discover a better solution for this, than this code might be worth a bit refactoring.
         */
        adjustDropdown() {
            this.$parent.$emit('adjust-dropdown');
        }
    },
    mounted: function () {
        this.$on('adjust-dropdown', this.adjustDropdown);
    }
};

export default dropdownTriggerMixin;