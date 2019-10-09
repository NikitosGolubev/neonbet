import { findAncestorByTag } from '../../../shared/helpers/dom';

/**
 * Ensures support for dropdown to be wrapped into table-specific HTML tags.
 */
export default {
    props: {
        ancestorTableTag: {
            default: null
        }
    },
    data() {
        return {
            tableWrapperElem: null,
            tableElementsDisplayMode: {
                'td': 'table-cell',
                'th': 'table-cell',
                'tr': 'table-row',
                'thead': 'table-header-group',
                'tbody': 'table-row-group',
                'table': 'table'
            }
        }
    },
    mounted() {
        // Adjusts the dropdown wrapper, if needed.
        this.initWorkWithTableAncestor();
    },
    methods: {
        adjustDropdownTableWrapperVisibility() {
            if (this.tableWrapperElem) {
                this.setDisplayOfTableWrapper();
            }
        },

        initWorkWithTableAncestor() {
            // If necessity of caring about ancestor defined
            if (this.ancestorTableTag) {
                this.findTableWrapperElem();
                this.setDisplayOfTableWrapper();
            }
        },

        findTableWrapperElem() {
            let dropdown = this.$refs.dropdown;
            const tableAncestor = findAncestorByTag(dropdown, this.ancestorTableTag);

            if (!tableAncestor) {
                console.error('The dropdown is not wrapped at the table tag you provided. Provided: ' + this.ancestorTableTag);
            } else {
                this.tableWrapperElem = tableAncestor;
            }
        },

        setDisplayOfTableWrapper() {
            // If dropdown active, than we set table wrapper to be visible, if not, than hide it
            if (!this.isDropdownActive) {
                this.tableWrapperElem.style.display = 'none';
            } else {
                const displayMode = this.tableElementsDisplayMode[this.ancestorTableTag];

                // Notifying user if there's no appropriate display value was found
                if (!displayMode) {
                    console.error('The table tag you provided is unknown. Provided: ' + this.ancestorTableTag);
                }

                this.tableWrapperElem.style.display = displayMode;
            }
        }
    }
};
