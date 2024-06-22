class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        $ans = [1];
        
        if($rowIndex === 0){
            return $ans;
        }
        
        for ($row = 1; $row <= $rowIndex; $row++){
            $ans[$row][0] = 1;
            for($col = 1; $col < $row; $col++) {
                $ans[$row][$col] = $ans[$row - 1][$col - 1] + $ans[$row - 1][$col];
            }
            
            $ans[$row][] = 1;
        }
        
        return $ans[$rowIndex];
    }
}