class Solution {

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target) {
        $l = 0;
        $lettersCnt = count($letters);
        $r = $lettersCnt - 1;
        
        while($l <= $r){
            $mid = $l + round(($r - $l) / 2);
            print_r([$l, $r, $mid]);
            if($letters[$mid] > $target){
                $r = $mid - 1;
            } elseif($letters[$mid] <= $target){
                $l = $mid + 1;
            }
        }
        
        return $letters[$l % $lettersCnt];
    }
}