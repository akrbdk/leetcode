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
    function preorderTraversal($root) {
        
        if($root->val === null){
            return [];
        }
        
        return array_merge(
            [
                $root->val
            ], 
            $this->preorderTraversal($root->left), 
            $this->preorderTraversal($root->right)
        );
    }
}