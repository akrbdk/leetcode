class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;
        
        while($left <= $right){
            $middle = floor(($left + $right) / 2);
            
            if($nums[$middle] == $target){
                return $middle;
            }
            
            if($nums[$middle] < $target){
                $left = $middle + 1;
            } else {
                $right = $middle - 1;
            }
        }
        
        return -1;
    }
}