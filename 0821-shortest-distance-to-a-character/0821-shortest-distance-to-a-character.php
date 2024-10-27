class Solution {

    /**
     * @param String $s
     * @param String $c
     * @return Integer[]
     */
    function shortestToChar($s, $c) {
        $n = strlen($s);
        $answer = array_fill(0, $n, $n);  // Initialize array with maximum distance
        $prev = -$n;  // Initially set to a large negative distance

        // Forward pass to find distance to nearest 'c' on the left side or itself
        for ($i = 0; $i < $n; $i++) {
            if ($s[$i] === $c) {
                $prev = $i;
            }
            $answer[$i] = abs($i - $prev);
        }

        $prev = $n * 2;  // Initially set to a large positive distance

        // Backward pass to find distance to nearest 'c' on the right side
        for ($i = $n - 1; $i >= 0; $i--) {
            if ($s[$i] === $c) {
                $prev = $i;
            }
            $answer[$i] = min($answer[$i], abs($i - $prev));
        }

        return $answer;
    }
}