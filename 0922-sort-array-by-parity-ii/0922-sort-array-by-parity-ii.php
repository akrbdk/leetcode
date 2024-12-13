class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParityII($nums) {
        $ans = array_fill(0, count($nums), 0);
        
        $even = 0;
        $odd = 1;
        
        for($i = 0; $i < count($nums); $i++){
            if($nums[$i] % 2 == 0){
                $ans[$even] = $nums[$i];
                $even += 2;
                continue;
            }
            
            $ans[$odd] = $nums[$i];
            $odd += 2;
        }
        
        return $ans;
    }
}