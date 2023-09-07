class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $minPrice = current($prices);
        $maxProfit = 0;
        
        foreach($prices as $price){
            $minPrice = min($minPrice, $price);
            $maxProfit = max($maxProfit, $price - $minPrice);
        }
        
        return $maxProfit;
    }
}