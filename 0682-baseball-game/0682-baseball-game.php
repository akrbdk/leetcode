class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function calPoints($operations) {
        $stack = [];
        
        for($i = 0; $i < count($operations); $i++){
            
            if((int)$operations[$i]){
                $stack[] = (int)$operations[$i];
                continue;
            }
            
            switch($operations[$i]){
                case '+':
                    $stackCnt = count($stack);
                    $stack[] = ($stack[$stackCnt - 1] ?? 0) + ($stack[$stackCnt - 2] ?? 0);
                    break;
                case 'C':
                    array_pop($stack);
                    break;
                case 'D':
                    $stack[] = $stack[count($stack) - 1] * 2;
                    break;
            }
        }
        
        print_r($stack);
        
        
        
        $sum = 0;
        
        foreach($stack as $item){
            $sum += $item;
        }
        
        return $sum;
    }
}