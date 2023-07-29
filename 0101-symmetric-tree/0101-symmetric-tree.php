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
    function isSymmetric($root) {
        if(!$root){
            return false;
        }
        
        return $this->compare($root->left, $root->right);
    }
    
    function compare($node1, $node2){
        if(!$node1 && !$node2){
            return true;
        }
        
        if(!$node1 || !$node2){
            return false;
        }
        
        if($node1->val !== $node2->val){
            return false;
        }
        
        return $this->compare($node1->left, $node2->right) && $this->compare($node1->right, $node2->left);
    }
}