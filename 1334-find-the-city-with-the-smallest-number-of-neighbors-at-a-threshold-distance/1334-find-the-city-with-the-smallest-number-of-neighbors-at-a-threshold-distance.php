class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @param Integer $distanceThreshold
     * @return Integer
     */
    function findTheCity($n, $edges, $distanceThreshold) {
        $INF = 10001; // A value greater than any possible path sum
        $dist = array_fill(0, $n, array_fill(0, $n, $INF));

        // Initialize distance for each city to itself as 0
        for ($i = 0; $i < $n; $i++) {
            $dist[$i][$i] = 0;
        }

        // Fill initial distances with the given edges
        foreach ($edges as $edge) {
            $from = $edge[0];
            $to = $edge[1];
            $weight = $edge[2];
            $dist[$from][$to] = $weight;
            $dist[$to][$from] = $weight;
        }

        // Floyd-Warshall Algorithm
        for ($k = 0; $k < $n; $k++) {
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    if ($dist[$i][$k] + $dist[$k][$j] < $dist[$i][$j]) {
                        $dist[$i][$j] = $dist[$i][$k] + $dist[$k][$j];
                    }
                }
            }
        }

        // Determine the number of reachable cities for each city
        $minReachable = $n;
        $resultCity = -1;

        for ($i = 0; $i < $n; $i++) {
            $reachable = 0;
            for ($j = 0; $j < $n; $j++) {
                if ($i != $j && $dist[$i][$j] <= $distanceThreshold) {
                    $reachable++;
                }
            }

            if ($reachable < $minReachable || ($reachable == $minReachable && $i > $resultCity)) {
                $minReachable = $reachable;
                $resultCity = $i;
            }
        }

        return $resultCity;
    }
}