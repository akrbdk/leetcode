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
    function findTilt($root) {
        $sum = 0;
        $this->dfs($root, $sum);
        
        return $sum;
    }
    
    function dfs($root, &$sum = 0){
        if($root === null){
            return 0;
        }
        
        $left = $this->dfs($root->left, $sum);
        $right = $this->dfs($root->right, $sum);
        $sum += abs($left - $right);
                
        return $left + $right + $root->val;
    }
}