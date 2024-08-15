class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance($x, $y) {
        if ($x === 0 && $y === 0) {
            return 0;
        }

        if ($x & 1 && !($y & 1) || !($x & 1) && $y & 1) {
            $x >>= 1;
            $y >>= 1;
            return 1 + $this->hammingDistance($x, $y);
        }

        $x >>= 1;
        $y >>= 1;
        
        return $this->hammingDistance($x, $y);
    }
}