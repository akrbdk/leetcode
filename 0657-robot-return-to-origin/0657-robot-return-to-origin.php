class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {
        $x = 0;
        $y = 0;
        
        for($i = 0; $i < strlen($moves); $i++){
            $move = $moves[$i];
            
            if($move == 'R'){
                $x++;
            } elseif($move == 'L'){
                $x--;
            } elseif($move == 'U'){
                $y++;
            } elseif($move == 'D'){
                $y--;
            }
        }
        
        return $x === 0 && $y === 0;
    }
}