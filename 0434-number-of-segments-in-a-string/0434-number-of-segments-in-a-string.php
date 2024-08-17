class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSegments($s) {
        $cnt = 0;
        $sLen = strlen($s);
        
        if(empty($s)){
            return $cnt;
        }
        
        $word = false;
        for($i = 0; $i < $sLen; $i++){
            if($s[$i] != ' '){
                $word = true;
            } else {
                if($word){
                    $cnt++;
                }
                
                $word = false;
            }
        }
        
        return $word ? ++$cnt : $cnt;
    }
}