class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        sort($nums);
        
        $closest = PHP_INT_MAX;
        $diff = PHP_INT_MAX;
        $numsCnt = count($nums);
        
        for($i = 0; $i < $numsCnt - 2; $i++){
            $left = $i + 1;
            $right = $numsCnt - 1;
            
            while($left < $right){
                $sum = $nums[$i] + $nums[$left] + $nums[$right];
            
            if($sum == $target){
                return $sum;
            }
            
            $tmpDiff = abs($sum - $target);
            if($tmpDiff < $diff){
                $diff = $tmpDiff;
                $closest = $sum;
            }
            
            if($sum > $target){
                $right--;
            } else {
                $left++;
            }
            }
        }
        
        return $closest;
    }
}