class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        sort($nums);
        $ans = [];
        $seen = [];
        
        for($i = 0; $i < count($nums); $i++){
            if(isset($seen[$nums[$i]])){
                continue;
            }
            
            $seen[$nums[$i]] = $i;
            $this->twoSum($i, $nums, $ans);
        }
        
        return $ans;
    }
    
    function twoSum(int $key, array $nums, array &$ans){
        $seen = [];
        $target = -$nums[$key];
        
        for($j = $i + 1; $j < count($nums); $j++){
            if($key == $j){
                continue;
            }
            
            $subTarget = $target - $nums[$j];
            
            if(isset($seen[$subTarget])){
                $tmp = [$nums[$key], $nums[$j], $subTarget];
                sort($tmp);
                if(isset($ans[implode("", $tmp)])){
                    continue;
                }
                $ans[implode("", $tmp)] = $tmp;
                continue;
            }
            $seen[$nums[$j]] = $j;
        }
    }
    
    
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum1($nums) {
        sort($nums);
        $res = [];
        $resHash = [];
        
        for($i = 0; $i < count($nums); $i++) {
            $l = $i+1;
            $r = count($nums)-1;
            while($l < $r) {
                $sum = $nums[$i]+$nums[$l]+$nums[$r];
                if($sum === 0) {
                    if($resHash[$nums[$i].$nums[$l].$nums[$r].""] !== 1) {
                        array_push($res, [$nums[$i],$nums[$l],$nums[$r]]);
                        $resHash[$nums[$i].$nums[$l].$nums[$r].""] = 1;
                    }
                    $l += 1;
                    $r -= 1;
                } else if($sum < 0) {
                    $l += 1;
                } else {
                    $r -= 1;
                }
            }
        }
        return $res;
    }
}