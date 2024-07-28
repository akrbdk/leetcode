func summaryRanges(nums []int) []string {
    var ans []string
    numsLen := len(nums)
    
    for i := 0; i < numsLen; i++ {
        start := nums[i]
        
        //this loop help to identify the end of a range of consecutive numbers
        for i < numsLen - 1 && nums[i + 1] == nums[i] + 1 {
            i++
        }
        
        if start == nums[i] {
            ans = append(ans, fmt.Sprintf("%d", nums[i]))
            continue
        }
        
        ans = append(ans, fmt.Sprintf("%d->%d", start, nums[i]))
    }
    
    return ans
}