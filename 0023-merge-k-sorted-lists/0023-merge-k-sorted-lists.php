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
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $arr = [];
        foreach($lists as $list){
            while($list){
                $arr[] = $list->val;
                $list = $list->next;
            }
        }
        
        sort($arr);
        $dummy = new ListNode();
        $curr = $dummy;
        
        foreach($arr as $val){
            $curr->next = new ListNode($val);
            $curr = $curr->next;
        }
        
        return $dummy->next;
    }
}