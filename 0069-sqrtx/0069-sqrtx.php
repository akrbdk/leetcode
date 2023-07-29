class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if($x === 1){
            return 1;
        }

        $l = 0;
        $r = floor($x/2);

        while($l <= $r){
            $mid = floor(($l+$r) / 2);
            $sqrt = $mid * $mid;
           
            if($sqrt == $x){
                return $mid;
            }
            
            if($sqrt < $x){
                $l = $mid + 1;
            } else {
                $r = $mid - 1;
            }
        }

        return  $r;
    }
}