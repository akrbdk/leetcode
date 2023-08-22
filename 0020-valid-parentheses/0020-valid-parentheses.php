class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        
        $d = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];
        
        for($i = 0; $i < strlen($s); $i++){
            if(isset($d[$s[$i]])){
                array_push($stack, $s[$i]);
            } else {
                $parent = array_pop($stack);
                
                if($d[$parent] != $s[$i]){
                    return false;
                }
            }
        }
        
        return empty($stack);
    }
}