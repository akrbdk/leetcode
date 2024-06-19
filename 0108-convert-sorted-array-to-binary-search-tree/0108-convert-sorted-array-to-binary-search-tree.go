/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */
func sortedArrayToBST(nums []int) *TreeNode {
    numsLen := len(nums)
    
    if numsLen == 0 {
        return nil
    }
    
    numsLenMid := numsLen / 2
    
    return &TreeNode{
        Val: nums[numsLenMid],
        Left: sortedArrayToBST(nums[:numsLenMid]),
        Right: sortedArrayToBST(nums[numsLenMid + 1:]),
    }
}