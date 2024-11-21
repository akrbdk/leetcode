class Solution {

    /**
     * @param Integer[] $aliceSizes
     * @param Integer[] $bobSizes
     * @return Integer[]
     */
    function fairCandySwap($aliceSizes, $bobSizes) {
        $aSum = array_sum($aliceSizes);
        $bSum = array_sum($bobSizes);
        
        $delta = ($aSum - $bSum) / 2; //difference to balance the exchange
        
        foreach($aliceSizes as $size){
            $needed = $size - $delta;
            if(in_array($needed, $bobSizes)){
                print_r([$size, $delta, $needed]);
                return [$size, $needed];
            }
        }
        
        return [];
    }
}