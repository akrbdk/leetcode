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
     * @param Integer $k
     * @return Boolean
     */
    function findTarget($root, $k) {
        $seen = [];
        $stack = [$root];
        
        while($stack){
            $cur = array_pop($stack);
                        
            if(in_array($k - $cur->val, $seen)){
                return true;
            }
            
            array_push($seen, $cur->val);
            
            if($cur->left !== null){
                array_push($stack, $cur->left);
            }
            
            if($cur->right !== null){
                array_push($stack, $cur->right);
            }
        }
        
        return false;
    }
}