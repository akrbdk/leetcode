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
     * @param Integer $x
     * @param Integer $y
     * @return Boolean
     */
    function isCousins($root, $x, $y) {
        if (!$root) {
            return false;
        }

        $queue = [[$root, null]]; // [node, parent]

        while (!empty($queue)) {
            $size = count($queue);
            $xParent = null;
            $yParent = null;

            for ($i = 0; $i < $size; $i++) {
                [$node, $parent] = array_shift($queue);

                if ($node->val === $x) {
                    $xParent = $parent;
                }

                if ($node->val === $y) {
                    $yParent = $parent;
                }

                if ($node->left) {
                    array_push($queue, [$node->left, $node]);
                }
                
                if ($node->right) {
                    array_push($queue, [$node->right, $node]);
                }
            }

            if ($xParent && $yParent) {
                return $xParent !== $yParent;
            } elseif ($xParent || $yParent) {
                return false; // one found but not the other
            }
        }

        return false;
    }
}