class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $numsCnt = count($nums);
        if($numsCnt === 1){
            return true;
        }
        
        //This line sets the initial target position to the last index of the array. 
        //The goal is to reach this position.
        $target = $numsCnt - 1;
        
        //This is a for loop that starts from the second-to-last element of the array and iterates backwards.
        for($i = $numsCnt - 2; $i >= 0; $i--){
            //This calculates the distance from the current position ($i) to the target position.
            $distance = $target - $i;
                    
            //If the jump distance from the current position is greater than or equal to the calculated 
            //distance to the target, then it means we can jump to the target position. Therefore, we update 
            //the target position to be the current position ($i).
            if($nums[$i] >= $distance){
                $target = $i;
            }elseif($i === 0){ 
                //If we've reached the first position and haven't been able to reach the target, 
                //it means it's not possible to reach the end. In this case, the function returns false.
                return false;
            }
        }
        
        return true;
    }
}