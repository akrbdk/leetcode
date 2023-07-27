/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head) {
        $values = [];
        
        while(isset($head->val)){
            $values[] = $head->val;
            $head = $head->next;
        }
        
        $countVal = count($values);
        for($i = 0; $i < $countVal/2; $i++){
            if($values[$i] != $values[$countVal - 1 - $i]){
                return false;
            }
        }
        
        return true;
        
    }
}