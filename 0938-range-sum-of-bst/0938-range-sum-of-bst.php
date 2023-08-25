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
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function rangeSumBST($root, $low, $high) {
        $val = $root->val;
        $sum = ($val>=$low && $val<=$high) ? $val : 0;
        
        if ($val>$low && $root->left!==null){
            $sum += $this->rangeSumBST($root->left, $low, $high);
        }
        
        if ($val<$high && $root->right!==null){
            $sum += $this->rangeSumBST($root->right, $low, $high);
        }
        
        return $sum;
    }
}