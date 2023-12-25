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
     * @return Boolean
     */
    function isValidBST($root) {
        return $this->isBst($root, PHP_INT_MIN, PHP_INT_MAX);
    }
    
    function isBst ($root, $min, $max){
        if($root == null){
            return true;
        }
        
        if($root->val < $min || $root->val > $max){
            return false;
        }
        
        return $this->isBst($root->left, $min, $root->val - 1) && $this->isBst($root->right, $root->val + 1, $max);
    }
}