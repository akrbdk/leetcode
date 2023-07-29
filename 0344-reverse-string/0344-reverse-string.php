class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $l = 0;
        $r = count($s) - 1; 
        
        while($l <= $r){
            $tmp = $s[$l];
            $s[$l] = $s[$r];
            $s[$r] = $tmp;
            
            $l++;
            $r--;
        }
    }
}