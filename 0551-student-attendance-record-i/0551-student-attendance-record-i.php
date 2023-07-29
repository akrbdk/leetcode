class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {
        $lCnt = 0;
        $rCnt = 0;
        
        $strArr = str_split($s);
        
        foreach($strArr as $str){
            if($str == 'A'){
                $rCnt++;
                if($rCnt == 2){
                    return false;
                }
            }
            
            if($str == 'L'){
                $lCnt++;
                if($lCnt == 3){
                    return false;
                }
            } else {
                $lCnt = 0;
            }
        }
        
        return true;
    }
}