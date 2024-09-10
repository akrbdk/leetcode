class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @param Integer[][] $ops
     * @return Integer
     */
    function maxCount($m, $n, $ops) {
        foreach($ops as [$x,$y]){
            if($x < $m){
                $m = $x;
            }
            
            if($y < $n){
                $n = $y;
            }
        }
        return $m * $n;
    }
}