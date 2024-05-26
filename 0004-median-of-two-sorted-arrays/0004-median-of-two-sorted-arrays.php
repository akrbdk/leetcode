class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        if(empty($nums1) && empty($nums2)) {
            return (float)0;
        }
        
        $nums = array_merge($nums1, $nums2);
        sort($nums);
        $numsCnt = count($nums) / 2;
        
        if(count($nums) % 2 === 0){
            return ($nums[$numsCnt] + $nums[$numsCnt - 1]) / 2;
        }
        
        return $nums[$numsCnt];
    }
}