/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */

type Res struct {
    Res []int
}

func inorderTraversal(root *TreeNode) []int {
    ans := Res{}
    ans.dfs(root)
    return ans.Res
}

func (r *Res) dfs (node *TreeNode) {
    
    if node == nil {
        return
    }
    
    r.dfs(node.Left)
    r.Res = append(r.Res, node.Val)
    r.dfs(node.Right)
}