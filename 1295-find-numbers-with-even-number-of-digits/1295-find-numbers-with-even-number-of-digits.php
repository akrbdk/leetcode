class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $evenCnt = 0;
        
        foreach($nums as $num){
            if($this->dNum($num) % 2 === 0){
                $evenCnt++;;
            }
        }
        
        return $evenCnt;
    }
    
    function dNum($num) {
        $cnt = 0;
        
        while($num >= 1){
            $num = $num / 10;
            $cnt++;
        }
        
        return $cnt;
    }
    
    function findNumbers2($nums) {
        $evenCnt = 0;
        
        foreach($nums as $num){
            if(strlen($num) % 2 === 0){
                $evenCnt++;;
            }
        }
        
        return $evenCnt;
    }
}