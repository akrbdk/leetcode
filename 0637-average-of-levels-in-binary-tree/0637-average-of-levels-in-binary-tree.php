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
     * @return Float[]
     */
    function averageOfLevels($root) {
        $ans = [];
        
        if($root === null){
            return $ans;
        }
        
        $q = new Splqueue();
        $q->enqueue($root);
        
        while(!$q->isEmpty()){
            $total = 0;
            $cnt = $q->count();
                        
            for($i = 0; $i < $cnt; $i++){
                $cur = $q->dequeue();
                $total += $cur->val;
                
                if($cur->left !== null){
                    $q->enqueue($cur->left);
                }
                
                if($cur->right !== null){
                    $q->enqueue($cur->right);
                }
            }
            
            $ans[] = $total / $cnt;
        }
        
        return $ans;
    }
}