class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $first = 1;
        $second = 1;
        
        while($n > 1) {
            $tmp = $first;
            $first = $second;
            $second = $tmp + $second;
            $n--;
        }
        
        return $second;
    }
    
    function climbStairs2($n) {
        if($n < 2) {
            return $n;
        }
        
        $dp = [];
        $dp[1] = 1;
        $dp[2] = 2;
        
        for($i = 3; $i <= $n; $i++){
            $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
        }
        
        return $dp[$n];
    }
}