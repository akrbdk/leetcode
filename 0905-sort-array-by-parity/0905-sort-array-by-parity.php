class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $j = 0;
        
        for($i = 0; $i < count($nums); $i++){
            if($nums[$i] % 2 === 0){
                $tmp = $nums[$i];
                $nums[$i] = $nums[$j];
                $nums[$j] = $tmp;
                $j++;
            }
        }
        
        return $nums;
    }
}