class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function islandPerimeter($grid) {
        $rows = count($grid);
        $cols = count($grid[0]);
        $ans = 0;
        
        for ($i = 0; $i < $rows; $i++){
            for ($j = 0; $j < $cols; $j++){
                if($grid[$i][$j] === 1){
                    //top border
                    if($i == 0 || $grid[$i - 1][$j] === 0){
                        $ans++;
                    }

                    //bottom border
                    if($i === ($rows - 1) || $grid[$i + 1][$j] === 0){
                        $ans++;
                    }

                    //left border
                    if($j === 0 || $grid[$i][$j - 1] === 0){
                        $ans++;
                    }

                    //right border
                    if($j === ($cols - 1) || $grid[$i][$j + 1] === 0){
                        $ans++;
                    }
                }
            }
        }
        
        return $ans;
    }
}