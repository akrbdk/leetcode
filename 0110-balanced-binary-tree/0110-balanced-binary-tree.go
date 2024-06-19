/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */
func isBalanced(root *TreeNode) bool {
    if root == nil {
        return true
    }
    
    return abs(depth(root.Left) - depth(root.Right)) <= 1 && isBalanced(root.Left) && isBalanced(root.Right)
}

func depth(node *TreeNode) int {
    if node == nil {
        return 0
    }
    
    return max(depth(node.Left), depth(node.Right)) + 1
}

func abs(a int) int {
    if a < 0 {
        return -a
    }
    
    return a
}

func max(a, b int) int {
    if a > b {
        return a
    }
    
    return b
}