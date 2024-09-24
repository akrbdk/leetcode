class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $numsCnt = count($nums);
        $lSum = 0;
        
        for($i = 0; $i < $numsCnt; $i++){
            $rSum = 0;
            for($j = $i + 1; $j < $numsCnt; $j++){
                $rSum += $nums[$j];
            }
                        
            if($lSum == $rSum){
                return $i;
            }
            
            $lSum += $nums[$i];
        }
        
        return -1;
    }
}