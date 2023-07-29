class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function peakIndexInMountainArray($arr) {
        $l = 0;
        $r = count($arr) - 1;
        
        while($l <= $r){
            $mid = floor(($l + $r) / 2);
            
            if($arr[$mid - 1] < $arr[$mid] && $arr[$mid + 1] < $arr[$mid]){
                return $mid;
            }
            
            if($arr[$mid - 1] > $arr[$mid]){
                $r = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }
        
        return -1;
    }
}