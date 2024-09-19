class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countBinarySubstrings($s) {
        $groups = [];
        $cnt = 1;
        
        //count consequtive groups of 1 and 0
        for($i = 1; $i < strlen($s); $i++){
            if($s[$i] == $s[$i - 1]){
                $cnt++;
            } else {
                $groups[] = $cnt;
                $cnt = 1;
            }
        }
        
        //add the last counter
        $groups[] = $cnt;
        
        //count substrings by choosing the minimum num of chars
        $ans = 0;
        for($i = 1; $i < count($groups); $i++){
            $ans += min($groups[$i], $groups[$i - 1]);
        }
        
        return $ans;
    }
}