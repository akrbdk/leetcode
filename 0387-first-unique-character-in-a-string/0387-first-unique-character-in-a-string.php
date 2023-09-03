class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $seen = [];        
        for($i = 0; $i < strlen($s); $i++){
            if(isset($seen[$s[$i]])){
                $seen[$s[$i]] = false;
                continue;
            }
            $seen[$s[$i]] = $i;
        }
                
        $seen = array_diff($seen, [false]);
        
        return empty($seen) ? -1 : current($seen);
    }
}