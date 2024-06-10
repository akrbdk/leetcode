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
     * @return ListNode
     */
    function swapPairs($head) {
        $dummy = new ListNode(0, $head);
        $prev = $dummy;
        $cur = $dummy->next;
        while($cur && $cur->next){
            $next = $cur->next;
            
            $prev->next = $next;
            $cur->next = $next->next;
            $next->next = $cur;
            
            $prev = $cur;
            $cur = $cur->next;
        }
        return $dummy->next;
    }
}