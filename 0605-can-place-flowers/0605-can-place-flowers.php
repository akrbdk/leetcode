class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {                
        for($i = 0; $i <= count($flowerbed) - 1; $i++){
            if((($flowerbed[$i-1] ?? 0) + $flowerbed[$i] + ($flowerbed[$i+1] ?? 0)) == 0){
                $flowerbed[$i] = 1;
                $n--;
            }
        }
        
        return $n <= 0;
    }
}