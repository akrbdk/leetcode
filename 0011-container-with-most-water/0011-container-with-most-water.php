class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $left = 0;
        $right = count($height) - 1;
        
        $answer = 0;
        
        while($left <= $right){
            $answer = max($answer, ($right - $left) * min($height[$left], $height[$right]));
            
            if($height[$left] < $height[$right]){
                $left++;
            } else {
                $right--;
            }
        }
        
        return $answer;
    }
}