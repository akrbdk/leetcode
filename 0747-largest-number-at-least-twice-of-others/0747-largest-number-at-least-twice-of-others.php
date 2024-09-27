class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function dominantIndex($nums) {
        $maxIndex = 0;
        $n = count($nums);

        // Найдем максимальный элемент и его индекс
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] > $nums[$maxIndex]) {
                $maxIndex = $i;
            }
        }

        // Проверим условие, что максимальный элемент >= 2 * все остальные
        for ($i = 0; $i < $n; $i++) {
            if ($i != $maxIndex && $nums[$maxIndex] < 2 * $nums[$i]) {
                return -1;
            }
        }

        // Если условие выполняется, возвращаем индекс максимального элемента
        return $maxIndex;
    }
}