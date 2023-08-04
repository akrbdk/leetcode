func majorityElement(nums []int) int {
    res, times := nums[0], 1
    for i := 1; i < len(nums); i++ {
        if nums[i] == res {
            times++
        } else {
            times--
            if times < 0 {
                res = nums[i]
                times = 1
            }
        }
    }
    return res
}