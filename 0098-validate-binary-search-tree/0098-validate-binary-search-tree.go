/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */
func isValidBST(root *TreeNode) bool {
	ch := make(chan int)

	go func(t *TreeNode) {
		inorder(t, ch)
		close(ch)
	}(root)

	v := <-ch
	for w := range ch {
		if v >= w {
			return false
		}
		v = w
	}
	return true
}

func inorder(t *TreeNode, ch chan<- int) {
	if t == nil {
		return
	}
	inorder(t.Left, ch)
	ch <- t.Val
	inorder(t.Right, ch)
}