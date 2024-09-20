class Solution {

    /**
     * @param String $s
     * @return String
     */
    function toLowerCase($s) {
        $ans = '';
        
        for($i = 0; $i < strlen($s); $i++){
            $ascii = ord($s[$i]);
            //check if char is an uppercase(ASCII 65 to 90)
            if($ascii >= 65 && $ascii <= 90){
                //convert to lowercase by adding 32
                $ans .= chr($ascii + 32);
            } else {
                $ans .= $s[$i];
            }
        }
        
        return $ans;
    }
}