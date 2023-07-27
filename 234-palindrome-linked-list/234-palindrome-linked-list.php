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
        $arr= [];
    $count = 0;
    
    do {
        $arr[] = $head->val;
        $head = $head->next;
        $count++;
    } while(isset($head->val));
    
    for($i=0; $i<$count/2; $i++){
        if($arr[$i]!=$arr[$count-1-$i]) return false;
    }
    
    return true;
        
    }
}