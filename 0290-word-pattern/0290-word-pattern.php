class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $hashMap = [];
        $countS = [];
        $sArr = explode(' ', $s);
        $patternLen = strlen($pattern);
        
        if(count($sArr) != $patternLen){
            return false;
        }
        
        for($i = 0; $i < $patternLen; $i++){
            if((isset($hashMap[$pattern[$i]]) || $countS[$sArr[$i]]) && $hashMap[$pattern[$i]] != $sArr[$i]){
                return false;
            }
            
            $hashMap[$pattern[$i]] = $sArr[$i];
            $countS[$sArr[$i]]++;
        }
        
        return true;
    }
}