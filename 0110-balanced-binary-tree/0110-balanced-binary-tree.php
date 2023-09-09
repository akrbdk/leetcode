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
    function isBalanced($root) {    
        $isBalanced = true;
        $this->getTreeDepth($root, $isBalanced);
        
        return $isBalanced;
    }
    
    public function getTreeDepth($node, &$isBalanced){
        if($node === null){
            return;
        }
        
        $leftDepth = $this->getTreeDepth($node->left, $isBalanced);
        $rightDepth = $this->getTreeDepth($node->right, $isBalanced);
        
        if(abs($leftDepth - $rightDepth) > 1){
            $isBalanced = false;
            return;
        }
        
        return max($leftDepth, $rightDepth) + 1;
    }
}