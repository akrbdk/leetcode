class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $ans = [];
        
        foreach($strs as $str){
            $wordArr = str_split($str);
            sort($wordArr);
            $ans[implode('', $wordArr)][] = $str;
        }
        
        return $ans;
    }
}