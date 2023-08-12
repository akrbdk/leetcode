class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $sArr = str_split($s);
        $ans = 0;
            
        for($i = count($sArr) - 1; $i >= 0; $i--){
            if($sArr[$i] == ' '){
                if($ans){
                    break;
                }
                continue;
            }
            
            $ans++;
        }
        
        return $ans;
    }
}