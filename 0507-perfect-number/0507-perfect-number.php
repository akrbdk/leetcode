class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function checkPerfectNumber($num) {
        if($num <= 1){
            return false;
        }
        
        $sum = 1;
        
        for($i = 2; $i < sqrt($num); $i++){
            if($num % $i == 0){

                //add divisor too the sum
                $sum += $i;
                
                //add corrresponding divisor to the sum if its different from $i
                if($i != $num / $i){
                    $sum += $num / $i;
                }
            }
        }
                
        return $sum == $num;
    }
}