class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findShortestSubArray($nums) {
        $cnt = [];
        $first = [];
        $last = [];
        
        foreach($nums as $i=>$n){
            if(!isset($first[$n])){
                $first[$n] = $i;
            }
            
            $last[$n] = $i;
            
            if(!isset($cnt[$n])){
                $cnt[$n] = 0;
            }
            
            $cnt[$n]++;
        }
        
        $freq = max($cnt);
        $minSub = PHP_INT_MAX;
        
        foreach($cnt as $n=>$f){
            if($f != $freq){
                continue;
            }
            
            $minSub = min($minSub, $last[$n] - $first[$n] + 1);
        }
        
        return $minSub;
    }
}