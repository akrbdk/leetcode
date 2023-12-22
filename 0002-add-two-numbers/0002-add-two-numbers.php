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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        
        $dummy = new ListNode(0);
        $prev = $dummy;
        $carry = 0;
        
        while($l1 != null || $l2 != null || $carry){
            $d1 = $l1 ? $l1->val : 0;
            $d2 = $l2 ? $l2->val : 0;
            
            $d = $d1 + $d2 + $carry;
            $carry = intval($d / 10);
            
            $prev->next = new ListNode($d % 10);
            $prev = $prev->next;
            
            $l1 = $l1 ? $l1->next : 0;
            $l2 = $l2 ? $l2->next : 0;
            
        }
        
        return $dummy->next;
    }
}