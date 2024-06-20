/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */
func hasPathSum(root *TreeNode, targetSum int) bool {
    if root == nil {
        return false
    }
    
    remainSum := targetSum - root.Val
    
    if root.Left == nil && root.Right == nil {
        return remainSum == 0
    }
    
    return hasPathSum(root.Left, remainSum) || hasPathSum(root.Right, remainSum)
}