class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $j = 0;
    
        for($i = 0; $i <= count($nums); $i++){
            if($nums[$i] != 0){
                $temp = $nums[$j];
                $nums[$j] = $nums[$i];
                $nums[$i] = $temp;
                $j++;
            }
        }
    }
}