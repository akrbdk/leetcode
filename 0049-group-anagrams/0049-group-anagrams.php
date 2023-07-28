class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $answer = [];
        
        foreach($strs as $str){
            $wordArr = str_split($str);
            sort($wordArr);
            $answer[implode('', $wordArr)][] = $str;
        }
        
        return $answer;
    }
}