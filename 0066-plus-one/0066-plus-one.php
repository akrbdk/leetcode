class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $carry = 1;
        
        for($i = count($digits) - 1; $i >= 0; $i--){
            $digits[$i] += $carry;
            $carry = (int)($digits[$i] / 10);
            $digits[$i] = $digits[$i] % 10;
        }
        
        if($carry){
            array_unshift($digits, $carry);
        }
        
        return $digits;
    }
}