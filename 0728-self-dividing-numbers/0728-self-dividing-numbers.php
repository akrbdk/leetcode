class Solution {

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right) {
        $ans = [];
        
        for($i = $left; $i <= $right; $i++){
            $num = $i;
            $dividing = true;
            
            while($num > 0){
                $last = $num % 10;
                                
                if($last == 0 || $i % $last != 0){
                    $dividing = false;
                }
                
                $num = intval($num / 10);
            }
            
            if($dividing){
                $ans[] = $i;
            }
        }
        
        return $ans;
    }
}