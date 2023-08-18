class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $counter = [];
        $intersection = [];

        foreach ($nums1 as $num) {
           $counter[$num] = $num;
        }

        foreach ($nums2 as $num) {
            if(isset($counter[$num]))
            {
                $intersection[] = $num;
                unset($counter[$num]);
            }
        }

        return $intersection;
    }
}