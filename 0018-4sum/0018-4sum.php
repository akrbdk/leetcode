class Solution {
    
     
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        sort($nums);
        $res = [];
        $resHash = [];
        $numsCnt = count($nums);
        
        if(empty($nums) || $numsCnt < 4){
            return $res;
        }
        
        for($i = 0; $i < $numsCnt - 3; $i++) {
            for($j=$i + 1 ; $j < $numsCnt - 2; $j++) {
                
                $l = $j + 1;
                $r = $numsCnt - 1;
                
                while ($l < $r) {
                    $sum = $nums[$i] + $nums[$j] + $nums[$l] + $nums[$r];
                    if ($sum == $target) {
                        if (!isset($resHash["$nums[$i].$nums[$j].$nums[$l].$nums[$r]"])) {
                            $resHash["$nums[$i].$nums[$j].$nums[$l].$nums[$r]"] = true;
                            array_push($res, [$nums[$i],$nums[$j],$nums[$l],$nums[$r]]);
                        }
                        $r--;
                        $l++;
                    }
                    elseif ($target > $sum) {
                        $l++;
                    }
                    else {
                        $r--;
                    }
                }
            }
        }
        
        return $res;
    }
}