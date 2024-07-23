class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function frequencySort($nums) {
        $map = [];
        
        foreach($nums as $num){
            if(isset($map[$num])){
                $map[$num]++;
                continue;
            }
            $map[$num] = 0;
        }
        
        usort($nums, function($a, $b) use ($map) {
            if($map[$a] == $map[$b]){
                //if the frequencies are the same - sort by value in descending order
                return $b - $a;
            }
            //sort by frequency in ascending order
            return $map[$a] - $map[$b];
        });
        
        return $nums;
    }
}