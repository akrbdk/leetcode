class Solution {
    
    const ANY = '.';
    const GREEDY = '*';

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch1($s, $p) {
        print_r([$s, $p]);
        
        if(empty($p)){
            return empty($s);
        }
        
        $anyMatch = !empty($s) && in_array($p[0], [$s[0], self::ANY]);
        $greedyMatch = !empty($p[1]) && $p[1] == self::GREEDY;
        
        if(!$anyMatch && !$greedyMatch){
            return false;
        }
        
        if($greedyMatch){
            return ($anyMatch && $this->isMatch(substr($s, 1), $p)) || $this->isMatch($s, substr($p, 2));
        }
        
        return $anyMatch && $this->isMatch(substr($s, 1), substr($p, 1));
    }
    
    function isMatch($s, $p) {
        // Create a memoization table
        $memo = [];

        // Helper function to perform the matching


        // Start the matching process from the beginning of the string and the pattern
        return $this->dp(0, 0, $s, $p, $memo);
    }

    function dp($i, $j, $s, $p, &$memo) {
        // If the answer is already in the memo, return it
        if (isset($memo[$i][$j])) {
            return $memo[$i][$j];
        }

        // If we've reached the end of the pattern
        if ($j == strlen($p)) {
            // The string must also be fully matched
            return $i == strlen($s);
        }

        // Check if the first characters of the remaining string and pattern match
        $first_match = ($i < strlen($s) && ($p[$j] == $s[$i] || $p[$j] == '.'));

        // Handle the case where the next character in the pattern is '*'
        if ($j + 1 < strlen($p) && $p[$j + 1] == '*') {
            // We can either:
            // 1. Skip the '*' and the preceding character in the pattern
            // 2. If there's a match, move to the next character in the string
            $result = ($this->dp($i, $j + 2, $s, $p, $memo) || ($first_match && $this->dp($i + 1, $j, $s, $p, $memo)));
        } else {
            // If there's no '*', move to the next character in both the string and pattern
            $result = $first_match && $this->dp($i + 1, $j + 1, $s, $p, $memo);
        }

        // Save the result in the memo and return it
        $memo[$i][$j] = $result;
        return $result;
    }
}