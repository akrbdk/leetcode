class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $k = $m + $n - 1;
        
        while($k >= 0){
            if($n < 1 || ($m > 0 && $nums1[$m - 1] > $nums2[$n - 1])){
                $nums1[$k] = $nums1[$m - 1];
                $m--;
            } else {
                $nums1[$k] = $nums2[$n - 1];
                $n--;
            }
            
            $k--;
        }
    }
}