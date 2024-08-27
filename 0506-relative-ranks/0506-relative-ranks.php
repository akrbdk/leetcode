class Solution {

    /**
     * @param Integer[] $score
     * @return String[]
     */
    function findRelativeRanks($score) {
        $scoreTmp = $score;
        $scoreCnt = count($scoreTmp);
        for($i = 0; $i < $scoreCnt; $i++){
            for($j = $i; $j < $scoreCnt; $j++){
                if($scoreTmp[$j] > $scoreTmp[$i]){
                    $tmp = $scoreTmp[$i];
                    $scoreTmp[$i] = $scoreTmp[$j];
                    $scoreTmp[$j] = $tmp;
                }
            }
        }
        
        $scoreTmp = array_flip($scoreTmp);
        
        foreach($score as $key => &$item){
            switch($scoreTmp[$item]){
                case 0:
                    $item = 'Gold Medal';
                    break;
                case 1:
                    $item = 'Silver Medal';
                    break;
                case 2:
                    $item = 'Bronze Medal';
                    break;
                default:
                    $item = (string)($scoreTmp[$item] + 1);
            }
        }
        
        return $score;
    }
}