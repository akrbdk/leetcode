class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $len = count($nums);
        $ans = [1];
        
        for($i = 1; $i < $len; $i++){
            $ans[$i] = $ans[$i-1] * $nums[$i-1];
        }
        
        $tmp = 1;
        
        for($i = $len - 1; $i >= 0; $i--){
            $ans[$i] = $ans[$i] * $tmp;
            $tmp = $tmp * $nums[$i];
        }
        
        return $ans;
    }
}