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
     * @return Integer
     */
    function diameterOfBinaryTree($root) {
        $ans = 0;
        $this->helper($root, $ans);
        return $ans;
    }
    
    function helper($root, &$ans){
        if(!$root){
            return 0;
        }
        
        $left = $this->helper($root->left, $ans);
        $right = $this->helper($root->right, $ans);
        $ans = max($ans, $left + $right);
        
        return max($left, $right) + 1;
    }
}