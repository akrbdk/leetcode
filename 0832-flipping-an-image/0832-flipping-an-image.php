class Solution {

    /**
     * @param Integer[][] $image
     * @return Integer[][]
     */
    function flipAndInvertImage($image) {
        foreach($image as &$row){
            $l = 0;
            $r = count($row) - 1;
            
            while($l <= $r){
                $tmpL = $row[$l];
                $row[$l] = $row[$r];
                $row[$r] = $tmpL;
                
                $row[$l] = $row[$l] === 1 ? 0 : 1;
                
                if($r != $l){
                    $row[$r] = $row[$r] === 1 ? 0 : 1;
                }
                
                $l++;
                $r--;
            }
        }
        
        return $image;
    }
}