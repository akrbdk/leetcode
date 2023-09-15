class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $numsCnt = count($nums);
        if($numsCnt === 1){
            return true;
        }
        
        $target = $numsCnt - 1;
        
        for($i = $numsCnt - 2; $i >= 0; $i--){
            $distance = $target - $i;
            
            if($nums[$i] >= $distance){
                $target = $i;
            }elseif($i === 0){
                return false;
            }
        }
        
        return true;
    }
}