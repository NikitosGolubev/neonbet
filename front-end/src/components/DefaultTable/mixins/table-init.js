import Table from "../Table";

/**
 * Defines necessary data for performing transformations with table.
 */
export default {
    props: {
        tablesContainerId: {
            type: String,
            required: true
        },

        tableSelector: {
            type: String,
            required: true
        },

        tableClassName: {
            type: String,
            required: true
        }
    },
    computed: {
        TABLE() {
            return new Table(this.tablesContainerId, this.tableSelector, this.tableClassName);
        }
    }
};