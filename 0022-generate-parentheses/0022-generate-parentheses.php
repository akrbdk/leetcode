class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $res = [];
        $this->backtrack($n, $n, "", $res);
        return $res;
    }
    
    function backtrack($l = 0, $r = 0, $curr = "", &$res){
            
        if($l == 0 && $r == 0){
            $res[] = $curr;
            return;
        }
        
        if($l > 0) {
            $this->backtrack($l - 1, $r, $curr . "(", $res);
        }
        
        if($r > $l) {
            $this->backtrack($l, $r - 1, $curr . ")", $res);
        }
    }
}