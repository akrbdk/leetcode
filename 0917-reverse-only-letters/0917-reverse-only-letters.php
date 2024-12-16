class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseOnlyLetters($s) {

        $ans = array_fill(0, strlen($s), '');
        
        $l = 0;
        $r = strlen($s) - 1;
        
        while($l <= $r){
            
            if(preg_match('/[^a-zA-Z]/', $s[$l])){
                $ans[$l] = $s[$l];
                $l++;
                continue;
            } elseif(preg_match('/[^a-zA-Z]/', $s[$r])){
                $ans[$r] = $s[$r];
                $r--;
                continue;
            }
            
            $ans[$l] = $s[$r];
            $ans[$r] = $s[$l];
            
            $l++;
            $r--;
        }
        
        //print_r($ans);
        
        return implode($ans);
    }
}