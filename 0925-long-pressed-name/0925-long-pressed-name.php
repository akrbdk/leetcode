class Solution {

    /**
     * @param String $name
     * @param String $typed
     * @return Boolean
     */
    function isLongPressedName($name, $typed) {
        $nameCnt = strlen($name);
        $typedCnt = strlen($typed);
        
        $i = 0;
        $j = 0;
        
        while($j < $typedCnt){
            if($i < $nameCnt && $typed[$j] == $name[$i]){
                $i++;
                $j++;
            } elseif($j > 0 && $typed[$j] == $typed[$j - 1]){
                $j++;
            } else {
                return false;
            }
        }
        
        
        
        return $i == $nameCnt;
    }
}