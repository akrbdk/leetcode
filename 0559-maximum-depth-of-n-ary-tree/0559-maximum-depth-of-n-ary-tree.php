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
     * @return integer
     */
    function maxDepth($root, $res = 0) {
    	if($root == null){
            return 0;
        }
        
        foreach($root->children as $child){
            $res = max($res, $this->maxDepth($child));
        }
        
        return $res + 1;
    }
}