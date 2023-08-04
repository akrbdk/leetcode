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
     * @return Integer[]
     */
    function inorderTraversal($root) {
        
        $ans = [];
        $stack = [];
        $cur = $root;
        
        
        while($cur || count($stack) > 0) {
            if($cur) {
                array_push($stack, $cur);
                $cur = $cur->left;
            } else {
                $cur = array_pop($stack);
                array_push($ans, $cur->val);
                $cur = $cur->right;
            }
        }  
        
        return $ans;
    }
}