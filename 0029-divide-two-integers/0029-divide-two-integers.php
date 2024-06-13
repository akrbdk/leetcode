class Solution {
    
    const MIN = -2147483648;
    const MAX = 2147483647;

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        $ans = $dividend / $divisor;

        
        if($ans > self::MAX) {
            return self::MAX;
        } 
        
        if($ans < self::MIN){
            return self::MIN;
        }
        
        $ans = $ans < 0 ? ceil($ans) : floor($ans);
        
        //if ans == -0
        if($ans == 0) {
            return 0;
        }

        return $ans;
    }
}