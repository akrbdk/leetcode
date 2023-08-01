class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $l = 0;
        $r = count($numbers) - 1;
        
        while($l <= $r){
            $sum = $numbers[$l] + $numbers[$r];
            
            if($sum == $target){
                return [$l + 1, $r + 1];
            }
            
            if($sum > $target){
                $r--;
            } else {
                $l++;
            }
        }
    }
}