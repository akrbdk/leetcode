class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $map1 = array_flip($list1);
        $minIdx = PHP_INT_MAX;
        
        $ans = [];
        
        foreach($list2 as $key=>$val){
            if(!isset($map1[$val])){
                continue;
            }
            
            $index = $map1[$val] + $key;
            
            if($index < $minIdx){
                $minIdx = $index;
                $ans = [$val];
            } elseif($index == $minIdx) {
                $ans[] = $val;
            }
        }
        
        return $ans;
    }
}