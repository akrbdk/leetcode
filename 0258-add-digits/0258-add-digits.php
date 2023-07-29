class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        while($num >= 10){
            $newNum = 0;
        
            while($num){
                $newNum += $num % 10;
                $num = (int)$num / 10;
            }
            
            $num = $newNum;
        }
        
        return $num;
    }
}