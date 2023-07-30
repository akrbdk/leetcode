class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $sArr = str_split($s);
        $tArr = str_split($t);
        
        foreach($tArr as $tItem){
            if(!in_array($tItem, $sArr)){
                return $tItem;
            }
            
            unset($sArr[array_search($tItem, $sArr)]);
        }
    }
}