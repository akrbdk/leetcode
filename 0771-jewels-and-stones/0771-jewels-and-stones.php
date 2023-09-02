class Solution {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $jewels = str_split($jewels);
        $stones = str_split($stones);
        $ans = 0;
        
        for($i = 0; $i < count($stones); $i++){
            if(in_array($stones[$i], $jewels)){
                $ans++;
            }
        }
        
        return $ans;
    }
}