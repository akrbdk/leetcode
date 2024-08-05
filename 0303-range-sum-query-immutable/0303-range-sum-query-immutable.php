class NumArray {
    /**
     * @param Integer[] $nums
     */
    function __construct(private $nums) {
        foreach($this->nums as $key=>$num){
            $this->nums[$key] += $this->nums[$key - 1];
        }
    }
  
    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function sumRange($left, $right) {
        if($left == 0) {
            return $this->nums[$right];
        }
        
        return $this->nums[$right] - $this->nums[$left - 1];
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($left, $right);
 */