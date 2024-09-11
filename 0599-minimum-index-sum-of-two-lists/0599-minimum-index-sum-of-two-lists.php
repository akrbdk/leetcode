class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $map1 = array_flip($list1);
    $minIndexSum = PHP_INT_MAX;
    $result = [];

    // Loop through list2 and check for common strings
    foreach ($list2 as $index2 => $restaurant) {
        if (isset($map1[$restaurant])) {
            // Calculate the index sum
            $indexSum = $index2 + $map1[$restaurant];
            
            // If the current index sum is less than the minimum, reset the result array
            if ($indexSum < $minIndexSum) {
                $minIndexSum = $indexSum;
                $result = [$restaurant];
            } 
            // If the index sum is the same as the current minimum, add to result
            elseif ($indexSum == $minIndexSum) {
                $result[] = $restaurant;
            }
        }
    }

    return $result;
    }
}