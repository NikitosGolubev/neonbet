import Table from "../Table";

import tableInit from './table-init';
import windowSizeTracker from '../../../shared/mixins/window-size-tracker';

export default {
    mixins: [windowSizeTracker, tableInit],
    computed: {
        // windowWidth <= sm  AND  tableData prepared
        isVisible() {return (this.$root.breakpoints.sm >= this.windowWidth) && this.tableData; },

        // Returns unique data specified for separate table.
        singles() {return this.tableData.singleTables;},

        // Returns headers which should be visible every time.
        primaryHeaderHTML() { return this.tableData.primaryHeader.innerHTML; },
        tableHeaders() { return this.tableData.headers; }
    },
    data() {
        return {
            isActivated: false,
            tableData: null
        }
    },
    methods: {
        visibilityChanged(isVisible, entry) {
            if (isVisible && this.isMounted && !this.isActivated) {
                PrivateAPI.collectTableData(this.TABLE).then(this.setTableData);

                this.isActivated = true;
            }
        },

        setTableData(tableData) { this.tableData = tableData; },

        getPrimaryCellHTML(table) { return table.primaryCell.innerHTML; },

        // Controls dropdown which displays the content of table
        adjustSingleTableDataState(table) { this.$set(table, 'isMobileDataActive', !table.isMobileDataActive); },
        showDataWrapper(table) { this.$set(table, 'isMobileDataWrapActive', true); },
        hideDataWrapper(table) { this.$set(table, 'isMobileDataWrapActive', false); }
    }
};

class PrivateAPI {
    /**
     * Provides all the necessary data to form mobile presentation of table.
     */
    static collectTableData(Table) {
        return new Promise((res, rej) => {
            res({
                primaryHeader: this.collectPrimaryHeader(Table),
                headers: this.collectHeaders(Table),
                singleTables: this.collectSingleTablesData(Table)
            });
        });
    }

    /**
     * Gathers data about single record to transform it into single table.
     */
    static collectSingleTablesData(Table) {
        const bodyRows = Table.bodyRows;
        const singleTables = [];


        bodyRows.forEach((row) => {
            let singleTableCells = {
                primaryCell: null,
                otherCells: [],
                additionalContent: [],
                isMobileDataActive: false, // dropdown option
                isMobileDataWrapActive: false // dropdown option
            };

            const primaryCell = this.collectPrimaryContentCell(Table, row);
            const otherCells = row.querySelectorAll(`.${Table.cellClassName}:not([${Table.primaryContentAttr}])`);
            const additionalContent = Table.getAdditionalContentFromRow(row);

            singleTableCells.primaryCell = primaryCell;
            singleTableCells.otherCells = Array.from(otherCells);
            singleTableCells.additionalContent = Array.from(additionalContent);

            singleTables.push(singleTableCells);
        });

        return singleTables;
    }

    /**
     * Gets content of primary header cell which should always be displayed to user
     */
    static collectPrimaryHeader(Table) {
        let primaryHeader = Table.element.querySelector(`[${Table.primaryHeaderAttr}]`);

        if (!primaryHeader) {
            primaryHeader = Table.headCells[0]; // taking first header cell

            // Warn message asking user to specify particular table header
            console.warn("Please, set the 'data-primary-header' attribute to specify particular cell which " +
                "should be treated as main one at this table.");
        }

        return primaryHeader;
    }

    /**
     * Gets primary content which should be always displayed to user
     */
    static collectPrimaryContentCell(Table, row) {
        let primaryCell = row.querySelector(`[${Table.primaryContentAttr}]`);

        if (!primaryCell) {
            primaryCell = row.querySelector(`.${Table.cellClassName}`);

            console.warn("Each row is supposed to contain 1 cell with 'data-primary-content attribute'.");
        }

        return primaryCell;
    }

    /**
     * Gets all header cells except primary one.
     */
    static collectHeaders(Table) {
        let headers = Table.element
            .querySelectorAll(`.${Table.headerCellClassName}:not([${Table.primaryHeaderAttr}])`);

        return Array.from(headers);
    }
}
