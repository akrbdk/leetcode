class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function summaryRanges($nums) {
        if(empty($nums)){
            return [];
        }
        
        $start = $nums[0];
        $nums[] = PHP_INT_MAX;
        $ans = [];
        
        foreach($nums as $k=>$n){
            if(isset($nums[$k - 1]) && ($n - $nums[$k - 1]) > 1){
                $end = $nums[$k - 1];
                if($start == $end){
                    $ans[] = "$start";
                } else {
                    $ans[] = "$start->$end";
                }
                $start = $n;
            }
        }
        
        return $ans;
    }
}