/** 
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {
        $l = 0;
        $h = $n;
        
        while ($l <= $h) {   
            $mid = floor(($l + $h) / 2);
            $guess = $this->guess($mid);
            
            if ($guess === 0) {
                return $mid;
            } elseif ($guess < 0) {
                $h = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }
    }
}