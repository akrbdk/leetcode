class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $seen = [];
        
        foreach($nums as $key => $num){
            $t = $target - $num;
            
            if(isset($seen[$t])){
                return [$seen[$t], $key];
            }
            
            $seen[$num] = $key;
        }
    }
}