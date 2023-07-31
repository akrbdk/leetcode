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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        return $this->helper(0, count($nums) - 1, $nums);
    }
    
    function helper($l, $r, $nums){
        if($l <= $r){
            $mid = floor(($l + $r) / 2);
            
            $root = new TreeNode($nums[$mid]);
            $root->left = $this->helper($l, $mid - 1, $nums);
            $root->right = $this->helper($mid + 1, $r, $nums);
            
            return $root;
        }
    }
}