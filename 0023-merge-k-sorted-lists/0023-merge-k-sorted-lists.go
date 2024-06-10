/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func mergeKLists(lists []*ListNode) *ListNode {
    
    if len(lists) == 0 {
        return nil
    }
    
    arr := []int{}
    
    for i := 0; i < len(lists); i++ {
        tmpList := lists[i]
        for tmpList != nil {
            arr = append(arr, tmpList.Val)
            tmpList = tmpList.Next
        }
    }
    
    if len(arr) == 0 {
        return nil
    }
    
    sort.Ints(arr)
    
    dummy := &ListNode{}
    cur := dummy
    
    for _, val := range arr {
        cur.Next = &ListNode{Val: val}
        cur = cur.Next
    }
    
    return dummy.Next
}