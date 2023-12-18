class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $ans = 0;
        
        for ($i = 1; $i <= count($prices); $i++){
            if($prices[$i] > $prices[$i - 1]){
                $ans += $prices[$i] - $prices[$i - 1];
            }
        }
        
        return $ans;
    }
}