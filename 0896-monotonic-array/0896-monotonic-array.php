class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function isMonotonic($nums) {
        $inc = true;
        $dec = true;
        
        for($i = 1; $i < count($nums); $i++){            
            if($nums[$i] > $nums[$i - 1]){
                $dec = false;
            }
            
            if($nums[$i] < $nums[$i - 1]){
                $inc = false;
            }
        }
                
        return $inc || $dec;
    }
}