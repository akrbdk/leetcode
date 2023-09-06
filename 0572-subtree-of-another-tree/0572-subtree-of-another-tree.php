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
     * @param TreeNode $subRoot
     * @return Boolean
     */
    function isSubtree($root, $subRoot) {
        if($root === null){
            return false;
        }
        
        if($root == $subRoot){
            return true;
        }
        
        if($this->isSubtree($root->left, $subRoot) || $this->isSubtree($root->right, $subRoot)){
            return true;
        }
        
        return false;
    }
}