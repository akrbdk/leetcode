class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);
        
        $i = 0;
        
        foreach($s as $sItem){
            if($sItem >= $g[$i]){
                $i++;
            }
            
            if($i == count($g)){
                break;
            }
        }

        return $i;
    }
}