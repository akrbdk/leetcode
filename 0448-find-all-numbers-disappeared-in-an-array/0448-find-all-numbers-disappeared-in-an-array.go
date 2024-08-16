func findDisappearedNumbers(nums []int) []int {
    for i := range nums {
        for nums[i] != i + 1 && nums[i] != nums[nums[i] - 1] {
            nums[i], nums[nums[i] - 1] = nums[nums[i] - 1], nums[i]
        }
    }
    
    
    
    var ans []int
    
    for i := range nums {
        if nums[i] == i + 1 {
            continue
        }
        
        ans = append(ans, i + 1)
    }
    
    return ans
    
}