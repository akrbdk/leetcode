class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        if($num < 2){
            return true;
        }
        
        $left = 1;
        $right = $num / 2;
        
        while($left <= $right){
            $middle = intval(($left + $right) / 2);
            $sqrt = $middle * $middle;
                        
            if($sqrt == $num){
                return true;
            }
            
            if($sqrt < $num){
                $left = $middle + 1; 
            } else {
                $right = $middle - 1;
            }
        }
        
        return false;
    }
}