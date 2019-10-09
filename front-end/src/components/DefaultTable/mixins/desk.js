import Table from "../Table";

import tableInit from './table-init';
import windowSizeTracker from '../../../mixins/window-size-tracker';

export default {
    mixins: [windowSizeTracker, tableInit],
    computed: {
        isVisible() {
            return this.$root.breakpoints.md < this.windowWidth;
        }
    },
    data() {
        return {
            isActivated: false
        }
    },
    methods: {
        visibilityChanged(isVisible, entry) {
            if (isVisible && this.isMounted && !this.isActivated) {
                PrivateAPI.adjustTableCellsContentHeight(this.TABLE);

                this.isActivated = true;
            }
        }
    }
};

class PrivateAPI {
    /**
     * This function makes height of .default-table cells content equal, so they look pretty.
     * @return Void
     */
    static adjustTableCellsContentHeight(Table) {
        let bodyRows = Table.bodyRows;

        // Calculating highest cell in a row and adjusting height of other cells according to it
        bodyRows.forEach((row) => {
            const cellMaxHeight = this.getHighestCellInRow(Table, row);

            if (cellMaxHeight !== null) {
                this.setHeightToCellContentInsideRow(Table, row, cellMaxHeight);
            }
        });
    }

    /**
     * Defining particular height of cells content inside row
     */
    static setHeightToCellContentInsideRow(Table, row, heightPx) {
        row.children.forEach((cell) => {
            const cellContent = cell.querySelector(`.${Table.contentClassName}`);

            if (cellContent) cellContent.style.height = heightPx+"px";
        });
    }

    /**
     * Figures out the highest children in a row
     * @return {HTMLElement}
     */
    static getHighestCellInRow(Table, row) {
        const cells = Table.getRowCells(row);
        if (cells) {
            let cellMaxHeight = this.calculateHeightWithNoPadding(cells[0]);

            // Figuring out the highest cell on a row
            cells.forEach((cell) => {
                const cellHeight = this.calculateHeightWithNoPadding(cell);
                if (cellHeight > cellMaxHeight) cellMaxHeight = cellHeight;
            });

            return cellMaxHeight;
        }
        console.info('No cells found in '+row);

        return null;
    }

    /**
     * Calculates height of the element without padding.
     * @param {HTMLElement} element
     * @return {HTMLElement}
     */
    static calculateHeightWithNoPadding(element) {
        const elementStyles = window.getComputedStyle(element);
        const heightWithPadding = element.clientHeight;
        const result = heightWithPadding - (parseFloat(elementStyles.paddingTop) + parseFloat(elementStyles.paddingBottom));

        return result;
    }
}