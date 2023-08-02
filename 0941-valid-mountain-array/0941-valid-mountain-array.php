class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function validMountainArray($arr) {
        
        $countArr = count($arr);
        
        if($countArr < 3){
            return false;
        }
        
        $i = 0;
        
        while($i < $countArr - 1 && $arr[$i] < $arr[$i + 1]){
            $i++;
        }
        
        $j = $countArr - 1;
        
        while($j > 0 && $arr[$j - 1] > $arr[$j]){
            $j--;
        }
        
        return $i === $j && $i > 0 && $i < ($countArr - 1);
    }
}