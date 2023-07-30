class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function backspaceCompare($s, $t) {
        return $this->typing($s) === $this->typing($t);;
    }
    
    function typing($s){
        $stack = [];
        $sArr = str_split($s);
        
        foreach($sArr as $c){
            if($c == '#'){
                if(!empty($stack)){
                    array_pop($stack);
                }
            } else {
                $stack[] = $c;
            }
        }
                
        return implode('', $stack);
    }
}