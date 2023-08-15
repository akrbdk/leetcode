class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $j = 0;
        
    
        for($i = 1; $i <= count($nums); $i++){
            if($nums[$j] !== $nums[$i]){
                $j++;
                $tmp = $nums[$j];
                $nums[$j] = $nums[$i];
                $nums[$i] = $tmp;
            }
        }
        
        return $j++;
    }
}