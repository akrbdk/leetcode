class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
        
        $i = 0;
        $sum = 0;

        while ($i < $k) {
            $sum += $nums[$i];
            $i++;
        }

        $maxAvg = $sum / $k;

        while ($i < count($nums)) {
            $sum = $sum + $nums[$i] - $nums[$i - $k];
            $maxAvg = max($maxAvg, $sum / $k);
            $i++;
        }

        return $maxAvg;
    }
}