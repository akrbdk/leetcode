/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function postorder($root) {
        $stack = [];
        
        $this->dfs($root, $stack);
        
        return $stack;
    }
    
    function dfs($root, &$stack = []){
        if($root === null){
            return;
        }
            
        if(!empty($root->children)){
            foreach($root->children as $child){
                $this->dfs($child, $stack);
            }
        }
        
        $stack[] = $root->val;
        
        return;
    }
}