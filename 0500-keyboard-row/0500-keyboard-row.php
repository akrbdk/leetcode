class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $kMap = [
            'qwertyuiop',
            'asdfghjkl',
            'zxcvbnm'
        ];
        
        foreach($kMap as &$m){
            $m = array_flip(str_split($m));
        }
        
        $ans = [];
        
        foreach($words as $w){
            $row = [];
            $wArr = str_split(strtolower($w));
            foreach($kMap as $map){
                if(isset($map[$wArr[0]])){
                    $row = $map;
                    break;
                }
            }
            
            if(!empty($row)){
                foreach($wArr as $char){
                    if(!isset($row[$char])){
                        continue 2;
                    }
                }
                $ans[] = $w;
            }
        }
        
        return $ans;
    }
}