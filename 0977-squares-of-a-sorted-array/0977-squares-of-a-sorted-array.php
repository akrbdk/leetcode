class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $left = 0;
        $right = count($nums) - 1;
        $ans = [];
        
        while($left <= $right){
            if(abs($nums[$right]) > abs($nums[$left])){
                $ans[] = $nums[$right]**2;
                $right--;
            } else {
                $ans[] = $nums[$left]**2;
                $left++;
            }
        }
        
        return array_reverse($ans);
    }
}