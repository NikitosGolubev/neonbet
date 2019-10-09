/**
 * @param element Element which ancestor should be found
 * @param searchedTagName Tag which ancestor should have
 * @return {boolean|HTMLElement}
 */
export function findAncestorByTag(element, searchedTagName) {
    let ancestor = element.parentNode;

    // Uppercase cuz of elem.tagName would return uppercase value.
    while (ancestor.tagName !== searchedTagName.toUpperCase()) {
        ancestor = ancestor.parentNode;

        if (ancestor.tagName === 'BODY') return false; // Nothing found
    }

    return ancestor;
}