class Solution {

    /**
     * @param Integer[] $timeSeries
     * @param Integer $duration
     * @return Integer
     */
    function findPoisonedDuration($timeSeries, $duration) {
        $ans = 0;
        
        for($i = 0; $i < count($timeSeries); $i++){
            $end = $timeSeries[$i] + $duration;
            
            if(isset($timeSeries[$i + 1])){
                $end = $timeSeries[$i + 1] - $timeSeries[$i];
            }
            
            $ans += $end < $duration ? $end : $duration;
        }
        
        return $ans;
    }
}