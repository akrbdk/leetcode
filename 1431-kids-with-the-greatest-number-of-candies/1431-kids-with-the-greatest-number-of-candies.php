class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $max = max($candies);
        $res = [];
        
        foreach($candies as $candy){
            if($candy + $extraCandies >= $max){
                $res[] = true;
                continue;
            }
            
            $res[] = false;
        }
        
        return $res;
    }
}