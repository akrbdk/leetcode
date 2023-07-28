class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $answer = [];
        
        for($i = 0; $i < $n + 1; $i++){
            $sum = 0;
            $bin = $i;
            
            while($bin != 0){
                $sum += $bin & 1;
                $bin = $bin >> 1;
            }

            $answer[] = $sum;
        }
        
        return $answer;
    }
}