class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $seen = [];
        
        foreach($nums as $key => $num){
            if(isset($seen[$num]) && abs($key - $seen[$num]) <= $k){
                return true;
            }
            $seen[$num] = $key;
        }
        
        return false;
    }
}