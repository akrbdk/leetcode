class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        for($i = 0; $i < count($nums); $i++){
            $nums[$i] += $nums[$i - 1];
        }
        
        return $nums;
    }
}