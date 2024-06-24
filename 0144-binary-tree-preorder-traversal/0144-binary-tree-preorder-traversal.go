/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */

type Result struct {
    Ans []int
}

func preorderTraversal(root *TreeNode) []int {
    res := Result{}
    res.dfs(root)
    return res.Ans
}

func (r *Result) dfs(node *TreeNode) {
    if node == nil {
        return
    }
    
    r.Ans = append(r.Ans, node.Val)
    r.dfs(node.Left)
    r.dfs(node.Right)
}