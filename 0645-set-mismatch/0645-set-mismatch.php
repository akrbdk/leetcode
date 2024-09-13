class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findErrorNums($nums) {
        $fill = array_fill(1, count($nums), 0);
        foreach($nums as $value) {
            $fill[$value]++;
        }
        $miss = [];
        $dup = [];

        foreach($fill as $key=>$val) { 
            if($val > 1) {
                $dup[] = $key;
            }
            if(!$val) {
                $miss[] = $key;
            }
        }
        
        return array_merge($dup, $miss);
    }
}