class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {
        $n1Len = strlen($num1) - 1;
        $n2Len = strlen($num2) - 1;
        $carry = 0;
        $ans = '';
        
        while($n1Len >= 0 || $n2Len >= 0 || $carry > 0){
            
            //substract '0' helps to convert string to int
            $n1Val = $n1Len >= 0 ? $num1[$n1Len] - '0' : 0;
            $n2Val = $n2Len >= 0 ? $num2[$n2Len] - '0' : 0;
            
            $tmpSum = $n1Val + $n2Val + $carry;            
            $carry = intdiv($tmpSum, 10);
            $ans = ($tmpSum % 10) . $ans;

            
            $n1Len--;
            $n2Len--;
        }
        
        return $ans;
    }
}