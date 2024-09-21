class Solution {

    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $color
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $newColor) {
        $oldColor = $image[$sr][$sc];
        
        // If the new color is the same as the old color, no need to change anything
        if ($oldColor == $newColor) {
            return $image;
        }

        // Call the recursive function to flood fill the image
        $this->fill($image, $sr, $sc, $oldColor, $newColor);
        return $image;
    }

    private function fill(&$image, $sr, $sc, $oldColor, $newColor) {
        // If the current cell is out of bounds or it's not the color we want to change, return
        if ($sr < 0 || $sc < 0 || $sr >= count($image) || $sc >= count($image[0]) || $image[$sr][$sc] != $oldColor) {
            return;
        }

        // Change the current pixel's color to the new color
        $image[$sr][$sc] = $newColor;

        // Recursively fill the surrounding pixels
        $this->fill($image, $sr - 1, $sc, $oldColor, $newColor); // up
        $this->fill($image, $sr + 1, $sc, $oldColor, $newColor); // down
        $this->fill($image, $sr, $sc - 1, $oldColor, $newColor); // left
        $this->fill($image, $sr, $sc + 1, $oldColor, $newColor); // right
    }
}