class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $sArr = explode(' ', $s);
        
        foreach($sArr as &$w){
            $wArr = str_split($w);
            
            $i = 0;
            $j = count($wArr) - 1;
            
            while($i <= $j){
                $tmp = $wArr[$i];
                $wArr[$i] = $wArr[$j];
                $wArr[$j] = $tmp;
                
                $i++;
                $j--;
            }
            
            $w = implode('', $wArr);
        }
        
        return implode(' ', $sArr);
    }
}