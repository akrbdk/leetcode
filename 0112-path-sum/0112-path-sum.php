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
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum) {
        return $this->DFS($root, 0, $targetSum);
    }
    
    function DFS($node, $sum, $targetSum) {
        if(!$node) {
            return false;
        }
        
        $sum += $node->val;
        
        if(!$node->left && !$node->right){
            return $sum === $targetSum;
        }
        
        return $this->DFS($node->left, $sum, $targetSum) || $this->DFS($node->right, $sum, $targetSum);
    }
}