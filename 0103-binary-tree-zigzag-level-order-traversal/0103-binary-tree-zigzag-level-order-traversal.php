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
     * @return Integer[][]
     */
    function zigzagLevelOrder($root) {
        $ans = [];
        $this->tree($root, 0, $ans);
        for($i = 0; $i < count($ans); $i++){
            if($i % 2 === 1){
                $ans[$i] = array_reverse($ans[$i]);
            }
        }
        return $ans;
    }
    
    function tree($root, $level, &$ans){
        if($root === null){
            return false;
        }
        
        $ans[$level][] = $root->val;
        $this->tree($root->left, $level + 1, $ans);
        $this->tree($root->right, $level + 1, $ans);
    }
}