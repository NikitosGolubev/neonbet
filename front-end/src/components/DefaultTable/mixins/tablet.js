import Table from '../Table';

// Packages
import cloneDeepWith from 'lodash/cloneDeepWith';
import isElement from 'lodash/isElement';

// Mixins
import tableInit from './table-init';
import windowSizeTracker from '../../../mixins/window-size-tracker';

export default {
    mixins: [windowSizeTracker, tableInit],
    computed: {
        isVisible() {
            // sm < windowWidth <= md
            return (this.$root.breakpoints.sm < this.windowWidth) && (this.$root.breakpoints.md >= this.windowWidth);
        }
    },
    data() {
        return {
            tableHTML: null,
            isActivated: false
        }
    },
    methods: {
        visibilityChanged(isVisible, entry) {
            if (isVisible && this.isMounted && !this.isActivated) {
                PrivateAPI.createTable(this.TABLE).then(this.setTableHTML);

                this.isActivated = true;
            }
        },

        setTableHTML(tableHTML) {
            this.tableHTML = tableHTML;
        }
    }
};

class PrivateAPI {
    /**
     * Generates HTML of table which should be displayed at tablets.
     * @return {Promise<any>}
     */
    static createTable(Table) {
        let {tableElement, headCells, bodyRows, resultContainer} = this.getInitialTableData(Table);

        const singleTableSample = this.formSingleTableContainer(Table, tableElement);

        return new Promise((res, rej) => {
            bodyRows.forEach((row) => {
                let tableContainer = cloneDeepWith(singleTableSample, this.cloneDOM);
                const rowCells = Array.from(Table.getRowCells(row));

                // Paste main content(header -> its appropriate cell (n times)) into single Table
                tableContainer = this.fillSingleTableWithMainContent(Table, tableContainer, {
                    headers: headCells,
                    contents: rowCells
                });

                // Paste additional content into single Table
                const additionalContent = Table.getAdditionalContentFromRow(row);
                tableContainer = this.fillSingleTableWithAdditionalContent(Table, tableContainer, additionalContent);

                resultContainer.appendChild(tableContainer);
            });

            res(resultContainer.outerHTML);
        });
    }

    /**
     * Fills with main content a single table for tablets.
     * @attention Theoretically, number of header cells and row cells should match.
     */
    static fillSingleTableWithMainContent(Table, tableContainer, {headers, contents}) {
        if (headers.length !== contents.length) {
           throw new Error('Theoretically, number of header cells and row cells should match.');
        }

        headers.forEach((headCell, index) => {
            // Taking copy of both header and content cell
            headCell = cloneDeepWith(headCell, this.cloneDOM);
            let bodyCell = cloneDeepWith(contents[index], this.cloneDOM);

            // Creating a row which would serve as container for cells
            let newRow = document.createElement('tr');
            newRow.classList.add(Table.rowClassName);

            newRow.appendChild(headCell);
            newRow.appendChild(bodyCell);

            tableContainer.appendChild(newRow);
        });

        return tableContainer;
    }

    /**
     * Pastes additional row content into single table
     */
    static fillSingleTableWithAdditionalContent(Table, tableContainer, additionalContent) {
        if (additionalContent) {
            // Filling additional content in table inside separate row.
            additionalContent.forEach((elem) => {
                // Separate row
                let contentRow = document.createElement('tr');
                contentRow.classList.add(Table.rowClassName);

                // Cell, which stretches for the full row width
                let contentCel = document.createElement('td');
                contentCel.setAttribute('colspan', 2);

                // Adding content
                contentCel.appendChild(cloneDeepWith(elem, this.cloneDOM));
                contentRow.appendChild(contentCel);

                tableContainer.appendChild(contentRow);
            });
        }
        return tableContainer;
    }

    /**
     * Cuts all unnecessary data from initial table, so it can serve
     * as a wrapper for tablet single-tables.
     * Also, adds some class names, and other attributes to make container fit the purpose.
     */
    static formSingleTableContainer(Table, initialTable) {
        let singleTableContainer = cloneDeepWith(initialTable, this.cloneDOM);
        singleTableContainer.innerHTML = '';
        singleTableContainer.classList.add(`${Table.className}_horizontal`);

        return singleTableContainer;
    }

    /**
     * Returns data from initially given table to form tablet version.
     * @return {Object}
     */
    static getInitialTableData(Table) {
        const resultContainer = document.createElement('div');

        return {
            tableElement: Table.element,
            headCells: Table.headCells,
            bodyRows: Table.bodyRows,
            resultContainer
        }
    }

    /**
     * Helps to clone DOM nodes with lodash
     * @param value
     * @return {ActiveX.IXMLDOMNode | Node}
     */
    static cloneDOM(value) {
        if (isElement(value)) {
            return value.cloneNode(true);
        }
    }
}