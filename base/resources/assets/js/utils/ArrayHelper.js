/**
 * Returns the array index of an item with a specific attribute. For example if you are looking
 * for an item with the attribute "id" that eqals "5", you can search it's index by findIndexByAttr(array,"id",5);
 *
 * @param  {array}  array The array to search
 * @param  {string} attr  The attribute name to match
 * @param  {mixed}  value The attribute value to look for
 * @return {number}       The array items index. undefined if nothing found
 */
export function findIndexByAttr(array, attr, value) {
    for (let i = 0; i < array.length; i += 1) {
        if (array[i][attr] === value) {
            return i;
        }
    }
}


