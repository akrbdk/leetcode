class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $str = decbin($n);
        $str = str_replace(0,'',$str);
    
    return strlen($str);
    }
    
    function hammingWeight2($n) {
        
    }
    
    function hammingWeight3($n) {
        $count = 0;

        for($i=0; $i < 32; $i++){
            if($n & 1 == 1){
                $count++;
            }
            $n >>= 1;
        }

        return $count;
    }
}