class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $arr = [];
        
        for($i = 1; $i <= $numRows; $i++){
            $arr[$i][0] = 1;
            
            for($j = 1; $j < $i; $j++){
                $arr[$i][$j] = $arr[$i-1][$j]+$arr[$i-1][$j-1];
            }
        }
                
        return $arr;
    }
}