class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $a1 = [];
        $a2 = [];
        
        for ($i = 0; $i<strlen($t); $i++){
            if($a1[$s[$i]] !== $a2[$t[$i]]){
                return False;
            }

            $a1[$s[$i]] = $i + 1;
            $a2[$t[$i]] = $i + 1;
        }
                
        return True;
    }
}