class Solution {

    /**
     * @param Integer[] $candyType
     * @return Integer
     */
    function distributeCandies($candyType) {
        $cnt = count($candyType);
        $need = $cnt / 2;
        
        $map = [];
        $find = 0;
        
        for($i = 0; $i < $cnt; $i++){
            if($find == $need){
                break;
            }

            if(isset($map[$candyType[$i]])){
                continue;
            }

            $map[$candyType[$i]] = true;
            $find++;
        }
        
        return $find;
    }
}