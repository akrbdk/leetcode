class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function licenseKeyFormatting($s, $k) {
        
        $sArr = str_split(
            strtoupper(
                str_replace('-', '', $s)
            )
        );
        
        $firstGroup = count($sArr) % $k ?: $k;
        $answer = '';
        
        for ($i=0; $i < $firstGroup; $i++) {
            $answer .= $sArr[$i];
        }

        for ($i = $firstGroup; $i <= count($sArr) - 1; $i++){
            if (($i-$firstGroup) % $k==0) {
                $answer .= '-';
            }
            $answer .= $sArr[$i];
        }

        return $answer;
    }
}