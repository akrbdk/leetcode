class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        
        $letters = [
            2 => ['a','b','c'], 
            3 => ['d','e','f'], 
            4 => ['g','h','i'], 
            5 => ['j','k','l'], 
            6 => ['m','n','o'], 
            7 => ['p','q','r','s'], 
            8 => ['t','u','v'], 
            9 => ['w','x','y','z']
        ];

        $res = [];
        
        $digitsLen = strlen($digits);
        
        if($digitsLen == 0) {
            return $res;
        } elseif($digitsLen === 1) {
            return $letters[$digits[0]];
        }
        
        $res = $letters[$digits[0]];
        
        for($i = 1; $i < $digitsLen; $i++){
            $tmpRes = [];
            
            foreach($letters[$digits[$i]] as $j){
                foreach($res as $r){
                    $tmpRes[] = $r . $j;
                }
            }
            
            $res = $tmpRes;
        }
        
        return $res;
    }
}