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
    function deleteDuplicates($head) {
        $dummy = new ListNode(null, $head);
        $prev = $dummy;
        
        while($head){
            if($head->val === $prev->val){
                $prev->next = $head->next;
            } else {
                $prev = $head;
            }
            
            $head = $head->next;
        }
        
        return $dummy->next;
    }
}