class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s) {
        $stack = [];
        $sArr = str_split($s);
                
        foreach($sArr as $i){
            if(!empty($stack) && end($stack) == $i){
                array_pop($stack);
            } else {
                $stack[] = $i;
            }
        }
        
        return implode('', $stack);
    }
}