class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $seen = [];
        
        foreach($nums as $k=>$v){
            $needed = $target - $v;
            if(isset($seen[$needed])){
                return [$seen[$needed], $k];
            }
            $seen[$v] = $k;
        }
    }
}