/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $slow = $head;
        $fast = $head->next;
        
        while($fast && $fast->next){
            if($slow === $fast){
                return true;
            }
            
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        
        return false;
    }
}