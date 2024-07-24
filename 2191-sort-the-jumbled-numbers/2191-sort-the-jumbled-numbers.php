class Solution {

    /**
     * @param Integer[] $mapping
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortJumbled($mapping, $nums) {
        
        $numsMapped = [];
        foreach($nums as $num){
            $numsMapped[$num] = $this->mappedVal($num, $mapping);
        }
        
        usort($nums, function($a, $b) use($numsMapped){
            return $numsMapped[$a] - $numsMapped[$b];
        });
        
        return $nums;
    }
    
    function mappedVal(int $num, array $mapping) {
        $mappedVal = '';
        $num = (string)$num;
        $numLen = strlen($num);
        
        for($i = 0; $i < $numLen; $i++){
            $num[$i] = $mapping[$num[$i]];
        }

        return (int)$num ?? 0;
    }
}