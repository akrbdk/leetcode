func removeDuplicates(nums []int) int {
    numsLen := len(nums)
    
    if numsLen <= 1 {
        return numsLen
    }
    
    l, r := 0, 1
    for r < numsLen {
        if nums[l] == nums[r] {
            r++
            continue
        }
        
        l++
        nums[l], nums[r] = nums[r], nums[l]
        r++
    }
    
    return l+1
}