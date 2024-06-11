func removeElement(nums []int, val int) int {
    k := 0
    
    for i := 0; i < len(nums); i++ {
        if val == nums[i]{
            continue
        }
        
        nums[k], nums[i] = nums[i], nums[k]
        k++
    }
    
    return k
}