func eraseOverlapIntervals(intervals [][]int) int {
    sort.Slice(intervals, func(a, b int) bool {
        return intervals[a][1] < intervals[b][1]
    })
    
    toRemove := 0
    lastEnd := intervals[0][1]
    
    for i := 1; i < len(intervals); i++ {
        if intervals[i][0] < lastEnd {
            toRemove++
            continue
        }
        
        lastEnd = intervals[i][1]
    }
    
    return toRemove
}