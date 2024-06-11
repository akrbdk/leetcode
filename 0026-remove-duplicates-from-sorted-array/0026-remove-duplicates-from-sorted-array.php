class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $l = 0;
        
        for($r = 1; $r <= count($nums); $r++){
            if($nums[$l] === $nums[$r]){
                continue;
            }
            
            $l++;
            $tmp = $nums[$r];
            $nums[$r] = $nums[$l];
            $nums[$l] = $tmp;
        }
        
        return $l++;
    }
}