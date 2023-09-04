class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $chaBucket = [];
        for ($i = 0; $i < strlen($magazine); $i++) {
			if (!isset($chaBucket[$magazine[$i]])) {
				$chaBucket[$magazine[$i]] = 0;
			}
            $chaBucket[$magazine[$i]]++;
        }
        for ($i = 0; $i < strlen($ransomNote); $i++) {
            if ($chaBucket[$ransomNote[$i]] == 0) {
                return false;
            }
            $chaBucket[$ransomNote[$i]]--;
        }
        return true;
    }
}