class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLengthOfLCIS($nums) {
        $cnt = 1;
        $res = 1;
        
        for($i = 0; $i < count($nums); $i++){
            if($nums[$i] >= $nums[$i + 1]){
                $cnt = 1;
                continue;
            }
            
            $cnt++;
            $res = max($cnt, $res);
        }
        
        return $res;
    }
}