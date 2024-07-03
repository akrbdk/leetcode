class Solution {

    /**
     * @param Integer[][] $firstList
     * @param Integer[][] $secondList
     * @return Integer[][]
     */
    function intervalIntersection($firstList, $secondList) {
        $ans = [];
        $first = $second = 0;
        
        while($first < count($firstList) && $second < count($secondList)) {
            $start = max($firstList[$first][0], $secondList[$second][0]);
            $end = min($firstList[$first][1], $secondList[$second][1]);
            
            if($start <= $end) {
                $ans[] = [$start, $end];
            }
            
            $firstList[$first][1] < $secondList[$second][1] ? $first++ : $second++;
        }
        
        return $ans;
    }
}