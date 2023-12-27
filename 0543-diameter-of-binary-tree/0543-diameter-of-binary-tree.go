/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */

func diameterOfBinaryTree(root *TreeNode) int {
    if root == nil {
        return 0
    }
    var diameter float64    
    helper(root, &diameter)
    return int(diameter-1)
}

func helper(root *TreeNode, diameter *float64) float64 {
    if root == nil {
        return 0
    }
    left := helper(root.Left, diameter)
    right := helper(root.Right, diameter)
    *diameter = math.Max(*diameter, left+right+1)
    return math.Max(left, right) + 1
}