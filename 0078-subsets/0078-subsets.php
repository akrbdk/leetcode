class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $ans = [[]];
        
        $this->getSubsets(nums: $nums, ans: $ans);
        
        return $ans;
    }
    
    function getSubsets(array $sub = [], int $start = 0, array $nums = [], array &$ans = []){        
        for($i = $start; $i < count($nums); $i++){
            $newSub = array_merge($sub, [$nums[$i]]);
            $ans[] = $newSub;
            $this->getSubsets($newSub, $i + 1, $nums, $ans);
        }
    }
}