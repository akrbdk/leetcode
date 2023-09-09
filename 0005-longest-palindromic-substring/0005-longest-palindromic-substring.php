class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $length = strlen($s);
        
        if($length <= 1){
            return $s;
        }
        
        if(strrev($s) === $s){
            return $s;
        }
        
        $result = "";

       for($i = 0; $i < $length; $i++){
           $longest = "";
           $temp = "";

           for($j = $i; $j < $length; $j++){
               $temp .= $s[$j];

               if($temp === strrev($temp)){
                   $longest = $temp;
               }
           }

           if(strlen($longest) > strlen($result)){
               $result = $longest;
           }
       }

       return $result;
    }
}