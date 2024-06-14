class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $first = -1;
        $last = -1;
        
        for ($i = 0; $i < count($nums); $i++){
            if($nums[$i] != $target) {
                continue;
            }
            
            if($first < 0) {
                $first = $i;
            }
            
            $last = $i;
        }
        
        return [$first, $last];
    }
}