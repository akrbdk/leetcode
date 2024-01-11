class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix) {
        $rowsToZeroOut = [];
        $colsToZeroOut = [];
        for ($i=0; $i<count($matrix); $i++) {
            for ($j=0; $j<count($matrix[$i]); $j++) {
                if ($matrix[$i][$j] === 0) {
                    $rowsToZeroOut[] = $i;
                    $colsToZeroOut[] = $j;
                }
            }
        }
        
        foreach($rowsToZeroOut as $r) {
            for($i=0; $i<count($matrix[$r]); $i++) {
               $matrix[$r][$i] = 0; 
            }
        }
                
        foreach($colsToZeroOut as $c) {
            for($i=0; $i<count($matrix); $i++) {
               $matrix[$i][$c] = 0; 
            }
        }
    }
}