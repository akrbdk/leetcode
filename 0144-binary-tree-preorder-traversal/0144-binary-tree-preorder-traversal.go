/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */

//USE Stacks

func preorderTraversal(root *TreeNode) []int {
    if root == nil {
        return nil
    }
    
    ans := []int{}
    stack := []*TreeNode{}
    dummy := root
    
    for len(stack) != 0 || dummy != nil {
        for dummy != nil {
            stack = append(stack, dummy)
            ans = append(ans, dummy.Val)
            dummy = dummy.Left
        }
        
        dummy = stack[len(stack) - 1].Right
        
        //The top node is then removed from the stack.
        stack = stack[:len(stack) - 1]
    }
    
    return ans
}



//DFS

type Result struct {
    Ans []int
}

func preorderTraversal1(root *TreeNode) []int {
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