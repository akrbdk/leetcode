/**
 * @param {...(null|boolean|number|string|Array|Object)} args
 * @return {number}
 */
var argumentsLength = function(...args) {
    let cnt = 0;
    for(let arg of args){
        cnt++;
    }

    return cnt;
};

/**
 * argumentsLength(1, 2, 3); // 3
 */