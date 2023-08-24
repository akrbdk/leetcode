class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $count = 0;

        for($i=0; $i < 32; $i++){
            if($n & 1 == 1){
                $count++;
            }
            $n >>= 1;
        }

        return $count;
    }
}