class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[][]
     */
    function transpose($matrix) {
        $ans = [];
        
        for($i = 0; $i < count($matrix); $i++){
            for($j = 0; $j < count($matrix[0]); $j++){
                $ans[$j][$i] = $matrix[$i][$j];
            }
        }
        
        return $ans;
    }
}