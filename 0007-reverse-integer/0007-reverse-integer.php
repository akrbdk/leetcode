class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $b =  $x < 0 ?  (int)strrev($x)*-1 : (int)strrev($x);
        $max = 2147483647;
        if($b < $max*- 1  || $b > $max ) {
            return 0;
        } else {
            return $b;
        }    
    }
}