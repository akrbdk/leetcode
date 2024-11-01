class Solution {

    /**
     * @param String $sentence
     * @return String
     */
    function toGoatLatin($sentence) {
        $sArr = explode(' ', $sentence);
        $as = '';
        foreach ($sArr as &$word) {
            if(!in_array(strtolower($word[0]), ['a', 'e', 'i', 'o', 'u'])) {
                $word = substr($word, 1) . $word[0];// Rule 2
            }
            
            $a .= 'a';
            $word .= 'ma';// Rule 1
            $word .= $a;// Rule 3
        }
        
        return implode(' ', $sArr);
    }
}