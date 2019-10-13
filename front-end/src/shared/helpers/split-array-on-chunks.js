/**
 * Splits array with items on smaller, grouped by certain size chunks.
 */
export default function splitArrayOnChunks(arr, chunkSize = 2) {
    let transformedArray = [];
    let i = 0;

    while (i < arr.length) {
        const chunk = arr.slice(i, (i + chunkSize));
        transformedArray.push(chunk);
        i+=chunkSize;
    }

    return transformedArray;
}
