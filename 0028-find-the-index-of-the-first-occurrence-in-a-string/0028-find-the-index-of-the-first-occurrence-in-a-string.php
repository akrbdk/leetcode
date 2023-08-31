class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $lh = strlen($haystack);
        $ln = strlen($needle);
        
        for($i = 0; $i < ($lh - $ln + 1); $i++){
            if(substr($haystack, $i, $ln) == $needle){
                return $i;
            }
        }
        
        return -1;
    }
}