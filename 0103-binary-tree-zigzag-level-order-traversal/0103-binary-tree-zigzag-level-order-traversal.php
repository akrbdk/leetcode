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
        $result = [];
        $this->traceTree($root, 0, $result);
        for ($i = 0; $i < count($result); $i++) {
            if ($i % 2 === 1) {
                $result[$i] = array_reverse($result[$i]);
            }
        }
        return $result;
    }
    
    function traceTree($tree, $level, &$result) {
        if ($tree === null) {
            return true;
        }
        $result[$level][] = $tree->val;
        $this->traceTree($tree->left, $level + 1, $result);
        $this->traceTree($tree->right, $level + 1, $result);
    }
}