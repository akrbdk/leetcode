func twoSum(nums []int, target int) []int {
    seen := make(map[int]int, len(nums))
    
    for key, val := range nums {
        if needed, ok := seen[target - val]; ok{
            return []int{needed, key}
        }
        seen[val] = key
    }
    
    return []int{0, 0}
}