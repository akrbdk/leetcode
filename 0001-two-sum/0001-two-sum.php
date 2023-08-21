class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashMap = [];
        
        foreach($nums as $k => $v){
            $find = $target - $v;
            
            if(isset($hashMap[$find])){
                return [$hashMap[$find], $k];
            }
            
            $hashMap[$v] = $k;
        }
    }
}