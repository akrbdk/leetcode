class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer[] $nums3
     * @param Integer[] $nums4
     * @return Integer
     */
    function fourSumCount($nums1, $nums2, $nums3, $nums4) {
        $hash = [];
        foreach ($nums1 as $n1) {
            foreach ($nums2 as $n2) {
                $n = $n1 + $n2;
                $hash[$n] = isset($hash[$n]) ? $hash[$n] + 1 : 1;
            }
        }
        $sum = 0;
        foreach ($nums3 as $n3) {
            foreach ($nums4 as $n4) {
                $n = 0 -$n3 - $n4;
                if (isset($hash[$n])) {
                    $sum += $hash[$n];
                }

            }
        }
        return $sum;
    }


}