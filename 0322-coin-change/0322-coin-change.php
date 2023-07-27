class Solution {

    /**
     * @param Integer[] $coins
     * @param Integer $amount
     * @return Integer
     */
    function coinChange($coins, $amount) {
        //заполняем массив элементами
        $dp = array_fill(1, $amount, PHP_INT_MAX);
        //добавляем недостающий нулевой элемент
        $dp[0] = 0;
        
        for($i = 1; $i <= $amount; $i++){
            foreach($coins as $coin){
                if($coin - $i > 0){
                    continue;
                }
                
                $dp[$i] = min($dp[$i], 1 + $dp[$i - $coin]);
            
            }
        }
                
        $res = $dp[count($dp) - 1];
        return $res === PHP_INT_MAX ? -1 : $res;
        
    }
}