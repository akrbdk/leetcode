/**
 * @param {string} val
 * @return {Object}
 */
var expect = function(val) {
    return {
        toBe: function(val2){
            if(val !== val2){
               throw 'Not Equal';
            }
            
            return true;
        },
        notToBe: function(val2){
            if(val === val2){
               throw 'Equal';
            }
            
            return true;
        }
    };
};

/**
 * expect(5).toBe(5); // true
 * expect(5).notToBe(5); // throws "Equal"
 */