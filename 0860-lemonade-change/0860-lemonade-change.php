class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $five = 0;  // To keep track of $5 bills
        $ten = 0;   // To keep track of $10 bills

        foreach ($bills as $bill) {
            if ($bill === 5) {
                // Customer pays with $5 bill, no change needed
                $five++;
            } elseif ($bill === 10) {
                // Customer pays with $10 bill, need $5 as change
                if ($five > 0) {
                    $five--;  // Give one $5 as change
                    $ten++;   // Keep the $10 bill
                } else {
                    return false;  // Can't provide change
                }
            } else { // $20 bill
                // Prefer to give one $10 and one $5 as change
                if ($ten > 0 && $five > 0) {
                    $ten--;  // Give one $10
                    $five--; // Give one $5
                } elseif ($five >= 3) {
                    // Otherwise, give three $5 bills as change
                    $five -= 3;
                } else {
                    return false;  // Can't provide change
                }
            }
        }

        return true;
    }
}