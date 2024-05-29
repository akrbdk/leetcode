class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if($numRows === 1) {
            return $s;
        }
        
        $arr = [];
        for($i = 0; $i < $numRows; $i++) {
            $arr[$i] = '';
        }
        
        $step = 0;
        $flag = true;
        
        for($i = 0; $i < strlen($s); $i++){
            $arr[$step] .= $s[$i];
            
            if($step === 0){
                $flag = true;
            }
            if($step === ($numRows - 1)){
                $flag = false;
            }
            $step = $flag ? $step + 1 : $step - 1;
        }
                
        $result = '';
        foreach($arr as $a){
            $result .= $a;
        }
        
        return $result;
    }
}