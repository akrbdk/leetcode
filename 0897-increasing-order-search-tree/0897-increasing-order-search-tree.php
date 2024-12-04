/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function increasingBST($root) {
        $newRoot = null;
        $curr = null;
        $this->dfs($root, $newRoot, $curr);
        
        return $newRoot;
    }
    
    function dfs($root, &$newRoot, &$curr){
        if(!$root) {
            return;
        }
                
        //traverse left subtree first
        $this->dfs($root->left, $newRoot, $curr);
        
        if(!$newRoot){
            //initialized one time and contain link to the head node to return
            $newRoot = new TreeNode($root->val);
            
            //curr is a point using to keep track the last node
            //curr contain only link to the last node, thats why we can't return curr instead of newRoot
            $curr = $newRoot;
        } else {
            $curr->right = new TreeNode($root->val);
            $curr = $curr->right;
        }
                
        //traverse right subtree
        $this->dfs($root->right, $newRoot, $curr);
    }
}