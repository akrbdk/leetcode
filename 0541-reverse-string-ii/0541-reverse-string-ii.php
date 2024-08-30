class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        $sLen = strlen($s);
        
        /*if($sLen < $k){
            $r = $sLen - 1;
            $l = 0;
            while($l <= $r){
                $tmp = $s[$l];
                $s[$l] = $s[$r];
                $s[$r] = $tmp;
                $l++;
                $r--;
            }
            return $s;
        }*/
        
        
        
        for($i = 0; $i < $sLen; $i += 2 * $k){
        
            $l = $i;
            $r = $i + $k - 1;
            
            if($r > ($sLen - 1)){
                $r = $sLen - 1;
            }
            
            print_r([$i, $l, $r, $s[$l], $s[$r]]);
            
            while($l <= $r){
                $tmp = $s[$l];
                $s[$l] = $s[$r];
                $s[$r] = $tmp;
                $l++;
                $r--;
            }
        }
        
        return $s;
    }
}