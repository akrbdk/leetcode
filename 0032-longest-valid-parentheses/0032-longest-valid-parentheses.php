class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses($s) {
        $maxLength = 0;
        $sLen = strlen($s);
        $dp = array_fill(0, $sLen, 0);
        
        for($i = 1; $i < $sLen; $i++){
            if($s[$i] == ')'){
                if($s[$i - 1] == '('){
                    $dp[$i] = ($i >= 2 ? $dp[$i - 2] : 0) + 2;
                } elseif($i - $dp[$i - 1] > 0 && $s[$i - $dp[$i - 1] - 1] == '('){
                    $dp[$i] = $dp[$i - 1] + ($i - $dp[$i - 1] >= 2 ? $dp[$i - $dp[$i - 1] - 2] : 0) + 2;
                }
            }
            

            $maxLength = max($maxLength, $dp[$i]);
        }
        
        print_r($dp);
        
        return $maxLength;
    }
}