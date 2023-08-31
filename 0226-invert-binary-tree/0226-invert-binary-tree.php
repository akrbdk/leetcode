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
    function invertTree($root) {
        if($root === null){
            return null;
        }
        
        $tmpLeft = $this->invertTree($root->right);
        $root->right = $this->invertTree($root->left);
        $root->left = $tmpLeft;
        
        return $root;
    }
}