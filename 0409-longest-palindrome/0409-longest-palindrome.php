class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s) {
        $map = [];
        for($i = 0; $i < strlen($s); $i++){
            $map[$s[$i]]++;
        }
        
        $ans = 0;
        foreach($map as $cnt){
            $ans += $cnt - $cnt % 2;
        }
        
        if ($ans < strlen($s)) { // put something in the middle of the palindrome
            $ans++;
        }
        
        return $ans;
    }
}