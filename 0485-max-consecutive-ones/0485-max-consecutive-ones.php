class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $numsCnt = count($nums);
        $cnt = 0;
        $ans = 0;
        
        for($i = 0; $i  < $numsCnt; $i++){
            if($nums[$i] === 0){
                $cnt = 0;
                continue;
            }
            
            $cnt++;
            $ans = max($cnt, $ans);
        }
        
        return $ans;
    }
}