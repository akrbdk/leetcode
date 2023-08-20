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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $res = new ListNode();
        $prev = $res;
        
        if(empty($list1) && empty($list2)){
            return [];
        }
        
        while($list1->val !== null && $list2->val !== null){
            if($list1->val > $list2->val){
                $prev->next = $list2;
                $list2 = $list2->next;
            } else {
                $prev->next = $list1;
                $list1 = $list1->next;
            }
            
            $prev = $prev->next;
        }
        
        if($list1){
            $prev->next = $list1;
        }
        
        if($list2){
            $prev->next = $list2;
        }
        
        return $res->next;
    }
}