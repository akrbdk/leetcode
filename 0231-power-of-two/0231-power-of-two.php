class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if($n < 1){
            return false;
        }
        
        if($n === 1){
            return true;
        }
        
        return $this->isPowerOfTwo($n / 2);
    }
}