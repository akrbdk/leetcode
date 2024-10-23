class Solution {

    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    function mostCommonWord($paragraph, $banned) {
        $words = explode(' ', strtolower(preg_replace("/[^a-zA-Z]/", ' ', $paragraph)));
        $map = [];
        
        foreach($words as $word){
            if(in_array($word, $banned) || empty($word)){
                continue;
            }
            
            if(!isset($map[$word])){
                $map[$word] = 1;
                continue;
            }
            
            $map[$word]++;
        }
        
        $ans = '';
        $tmp = 0;
        foreach($map as $key=>$cnt){
           if($cnt > $tmp){
               $ans = $key;
               $tmp = $cnt;
           } 
        }
        
        return $ans;
    }
}