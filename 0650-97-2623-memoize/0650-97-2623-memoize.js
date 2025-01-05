/**
 * @param {Function} fn
 * @return {Function}
 */
function memoize(fn) {
    let map = new Map;
    return function(...args) {
        if(map.has(fn + args)){
            return map.get(fn + args);
        }

        res = fn(...args);
        map.set(fn + args, res);
        return res;
    }
}


/** 
 * let callCount = 0;
 * const memoizedFn = memoize(function (a, b) {
 *	 callCount += 1;
 *   return a + b;
 * })
 * memoizedFn(2, 3) // 5
 * memoizedFn(2, 3) // 5
 * console.log(callCount) // 1 
 */