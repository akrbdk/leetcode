class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashMap = [];

        foreach($nums as $key=>$value){
            $find = $target - $value;

            if(isset($hashMap[$find])){
                return [$hashMap[$find], $key];
            }

            $hashMap[$value] = $key;
        }
    }
}