class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $ans = 0;
        $s = ltrim($s);
        
        if(empty($s)){
            return $ans;
        }
        
        $sign = 1;
        $index = 0;
        
        switch($s[$index]) {
            case '-':
                $sign = -1;
                $index++;
                break;
            case '+':
                $index++;
        }
        
        $sLen = strlen($s);
        for($i = $index; $i < $sLen; $i++){
            if(!is_numeric($s[$i])){
                break;
            }
            
            $ans = $ans * 10 + (int)$s[$i];
        }
        
        $ans *= $sign;
        
        $min = -2147483648;
        $max = 2147483647;
        if($ans > $max){
            return $max;
        } elseif ($ans < $min){
            return $min;
        }
        
        return $ans;
    }
}