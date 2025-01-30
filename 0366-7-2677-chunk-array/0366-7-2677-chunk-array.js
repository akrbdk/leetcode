/**
 * @param {Array} arr
 * @param {number} size
 * @return {Array}
 */
var chunk = function(arr, size) {
    var ans = [];
    var chunk = [];
    for(let i = 0; i < arr.length; i++){
        chunk.push(arr[i]);
        if(chunk.length % size === 0 || arr.length - 1 == i){
            ans.push(chunk);
            chunk = [];
        }
    }

    return ans;
};
