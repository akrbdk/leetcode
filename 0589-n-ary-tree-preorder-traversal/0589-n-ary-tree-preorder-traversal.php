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
    function preorder($root) {
        $map = [];
        $this->dfs($root, $map);
        
        return $map;
    }
    
    function dfs($root, &$map){
        if($root == null){
            return;
        }
        
        $map[] = $root->val;
        
        foreach($root->children as $child){
            if($child->children == null){
                $map[] = $child->val;
                continue;
            }
            $this->dfs($child, $map);
        }
        
        return;
    }
}