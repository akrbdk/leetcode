class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $result = "";
        $buf = 0;

        while(strlen($a) > 0 || strlen($b) > 0 || $buf > 0) 
        {
            $sum = $buf;

            if(strlen($a) > 0) {
                $sum += intval($a[-1]);
                $a = substr($a, 0, -1);
            }
              
            if(strlen($b) > 0) {
                $sum += intval($b[-1]);
                $b = substr($b, 0, -1);
            }

            $result = $sum % 2 . $result;
            $buf = floor($sum / 2);                
        }
        
        return $result;
    }
}