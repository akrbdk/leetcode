class Solution {

    /**
     * @param Integer[][] $mat
     * @param Integer $r
     * @param Integer $c
     * @return Integer[][]
     */
    function matrixReshape($mat, $r, $c) {
        $rows = count($mat);
        $cols = count($mat[0]);
        
        if($cols * $rows != $r * $c){
            return $mat;
        }
        
        $stack = [];
        
        foreach($mat as $row){
            foreach($row as $col){
                $stack[] = $col;
            }
        }
        
        $newMat = [];
        for($i = 0; $i < $r; $i++){
            $newMat[$i] = array_slice($stack, $i * $c, $c);
        }
        
        return $newMat;
    }
}