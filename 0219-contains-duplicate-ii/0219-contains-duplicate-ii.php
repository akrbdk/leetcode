class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        
        /*
        Иными словами, вы должны проверить, есть ли в массиве два одинаковых элемента, 
        которые находятся на расстоянии не более k друг от друга. Если такая пара существует, 
        то функция должна вернуть true, в противном случае - false.
        */
        
        $seen = [];
        
        foreach($nums as $key => $num){
            if(isset($seen[$num]) && abs($key - $seen[$num]) <= $k){
                return true;
            }
            $seen[$num] = $key;
        }
        
        return false;
    }
}