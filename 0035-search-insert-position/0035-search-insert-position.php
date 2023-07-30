class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $l = 0;
        $r = count($nums) - 1;
        
        while($l <= $r){
            $mid = floor(($l + $r) / 2);
            
            if($nums[$mid] == $target){
                return $mid;
            } elseif($nums[$mid] > $target){
                $r = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }
        
        return $l;
    }
}