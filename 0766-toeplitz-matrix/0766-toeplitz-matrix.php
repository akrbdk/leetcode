class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    function isToeplitzMatrix($matrix) {
        $ans = true;
        
        $rows = count($matrix);
        $cols = count($matrix[0]);
        
        for($r = 0; $r < $rows; $r++){
            for($c = 0; $c < $cols; $c++){
                $val = $matrix[$r][$c];
                $topLeft = null;
                $bottomRight = null;
                
                if($r > 0 && $c > 0){
                    $topLeft = $matrix[$r - 1][$c - 1];
                }
                
                if($r < $rows - 1 && $c < $cols - 1){
                    $bottomRight = $matrix[$r + 1][$c + 1];
                }
                
                if(($topLeft && $topLeft !== $val) || ($bottomRight && $bottomRight !== $val)){
                    $ans = false;
                    break 2;
                }
            }
        }
        
        return $ans;
    }
}