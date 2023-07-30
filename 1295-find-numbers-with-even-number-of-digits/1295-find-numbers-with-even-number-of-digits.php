class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $evenCnt = 0;
        
        foreach($nums as $num){
            if(strlen($num) % 2 === 0){
                $evenCnt++;;
            }
        }
        
        return $evenCnt;
    }
}