class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $answer = 0;
        
        foreach($nums as $num){
            $answer ^= $num;
            print_r($num, $answer);
        }
        
        return $answer;
    }
}