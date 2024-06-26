func majorityElement(nums []int) int {
    cnt, ans := 0, 0
    for _, num := range nums {
        if cnt == 0 {
            ans = num
        }
        
        if num == ans {
            cnt++
        } else {
            cnt --
        }
    }
    
    return ans
}

func majorityElement2(nums []int) int {
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