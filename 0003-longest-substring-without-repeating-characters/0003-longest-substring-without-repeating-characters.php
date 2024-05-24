class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        
        $count = 0;
        
        if(empty($s)){
            return $count;
        }
        
        $chars = [];
        $sArr = str_split($s);
        $sArrCount = count($sArr);
        var_dump($chars);
        for($i = 0; $i < $sArrCount; $i++){
            while(is_array($chars) && in_array($sArr[$i], $chars)){
                array_shift($chars);
            }
            $chars[] = $sArr[$i];
            $count = $count > count($chars) ? $count : count($chars);
        }
        
        return $count;
    }
}