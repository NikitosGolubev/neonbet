/**
 * Representation of table. Contains its properties and accepted standards.
 */
export default class Table {
    constructor(containerId, selector, className) {
        // ID of container inside which one table is stored.
        this.containerId = containerId;

        // Selector which can be applied to find initial table (given) inside its container.
        this.selector = selector;

        // Table base classname, on top op which styling is done.
        this.className = className;

        // Attribute which specifies that some content belongs to some row.
        this.rowKeyAttr = 'data-row-key';

        // Attribute which specifies some header to be main one at the table.
        this.primaryHeaderAttr = 'data-primary-header';

        // Attribute which specifies that some content matches with primary header.
        this.primaryContentAttr = 'data-primary-content';
    }

    // Initial table element
    get element() {return document.getElementById(this.containerId).querySelector(this.selector);}

    get headCells() {return this.element.querySelectorAll(`.${this.headerCellClassName}`);}
    get bodyRows() {return this.element.querySelectorAll(`.${this.bodyClassName} .${this.rowClassName}`);}


    get headersGroupClassName() {return this.className+'__header';}
    get headerCellClassName() {return this.className+'__head-cell';}
    get bodyClassName() {return this.className+'__body';}
    get rowClassName() {return this.className+'__row';}
    get cellClassName() {return this.className+'__cell';}
    get contentClassName() {return this.className+'__content';}

    /**
     * Fetches cells from row
     */
    getRowCells(row) {
        return row.querySelectorAll(`.${this.cellClassName}`);
    }

    /**
     * Fetches additional row content by rowKey
     */
    getAdditionalContentFromRow(row) {
        const rowKey = row.getAttribute(this.rowKeyAttr);
        if (!rowKey) return null;

        const additionalContent = this.element.querySelectorAll(`[${this.rowKeyAttr}='${rowKey}']:not(.${this.rowClassName})`);

        return additionalContent ? additionalContent : null;
    }
};


