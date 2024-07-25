class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArray($nums) {
        sort($nums);
        return $nums;
        
        /*if(count($nums) <= 1){
            return $nums;
        }
        
        $pivot = $nums[0];
        $left = [];
        $right = [];
                
        for($i = 1; $i < $numsCnt; $i++){
            if($nums[$i] > $pivot){
                $right[] = $nums[$i];
                continue;
            }
            
            $left[] = $nums[$i];
        }
        
        return array_merge(
            $this->sortArray($left),
            [$pivot],
            $this->sortArray($right)
        );*/
        
        
        /*do {
            $toSort = false;
            for($i = 0; $i < count($nums) - 1; $i++){
                if($nums[$i] > $nums[$i + 1]){
                    $tmp = $nums[$i];
                    $nums[$i] = $nums[$i + 1];
                    $nums[$i + 1] = $tmp;
                    $toSort = true;
                }
            }
        } while ($toSort);
        
        
        return $nums;*/
    }
}