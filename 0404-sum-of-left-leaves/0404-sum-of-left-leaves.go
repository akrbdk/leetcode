/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */
func sumOfLeftLeaves(root *TreeNode) int {
    if root == nil {
        return 0
    }
    
    val := 0
    
    if root.Left != nil && root.Left.Left == nil && root.Left.Right == nil {
        val = root.Left.Val
    }
    
    return val + sumOfLeftLeaves(root.Left) + sumOfLeftLeaves(root.Right)
}