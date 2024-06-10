/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func swapPairs(head *ListNode) *ListNode {
    dummy := &ListNode{Next: head}
    prev := dummy
    cur := dummy.Next
    
    for cur != nil && cur.Next != nil {
        next := cur.Next
        
        prev.Next = next
        cur.Next = next.Next
        next.Next = cur
        
        prev = cur
        cur = cur.Next
    }
    
    return dummy.Next
}