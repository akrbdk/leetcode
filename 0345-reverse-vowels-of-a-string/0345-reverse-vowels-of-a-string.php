class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $list = str_split($s);
        
        $l = 0;
        $r = count($list) - 1;
        
        while($l <= $r){
            if(!in_array($list[$l], $vowels)){
                $l++;
                continue;
            }
            
            if(!in_array($list[$r], $vowels)){
                $r--;
                continue;
            }
                        
            $tmp = $list[$l];
            $list[$l] = $list[$r];
            $list[$r] = $tmp;
            
            $l++;
            $r--;
        }
        
        return implode('', $list);
    }
}