class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if($x === 1){
            return 1;
        }

        $i = 0;
        $j = floor($x/2);

        while($i <= $j){
            $middleValue =  floor(($i+$j)/2);
           
            if($middleValue * $middleValue == $x){
                return  $middleValue;
            } else {
                if($middleValue * $middleValue < $x){
                    $i = $middleValue + 1;
                } else {
                    $j = $middleValue - 1;
                }
            }
        }


        if($middleValue * $middleValue < $x){
            return  $middleValue;
        }

        return  $middleValue - 1;
    }
}