class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $minPrice = $prices[0];
        $maxProfit = 0;
        
        foreach($prices as $price){
            $minPrice = min($minPrice, $price);
            $maxProfit = max($maxProfit, $price - $minPrice);
        }
        
        return $maxProfit;
    }
}