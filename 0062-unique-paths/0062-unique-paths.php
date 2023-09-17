class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n, $startPoint = [], &$memory = []) {
        
        if(empty($startPoint)){
            $startPoint = [0, 0];
        }
        
        [$x, $y] = $startPoint;
        
        if(isset($memory[$x][$y])){
            return $memory[$x][$y];
        }
        
        if($x == $m - 1 && $y == $n - 1){
            return 1;
        }
        
        if($x > $m - 1 || $y > $n - 1){
            return 0;
        }
        
        $memory[$x][$y] = $this->uniquePaths($m, $n, [$x + 1, $y], $memory) + $this->uniquePaths($m, $n, [$x, $y + 1], $memory);
        
        return $memory[$x][$y];
    }
}