func intervalIntersection(firstList [][]int, secondList [][]int) [][]int {
    ans := [][]int{}
    f, s := 0, 0
    
    for f < len(firstList) && s < len(secondList) {
        start := max(firstList[f][0], secondList[s][0])
        end := min(firstList[f][1], secondList[s][1])
        
        if start <= end {
            ans = append(ans, []int{start, end})
        }
        
        if firstList[f][1] < secondList[s][1] {
            f++
        } else {
            s++
        }
    }
    
    return ans
}

func min(i, j int) int {
    if i < j {
        return i
    }
    
    return j
}

func max(i, j int) int {
    if i > j {
        return i
    }
    
    return j
}