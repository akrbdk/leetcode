func thirdMax(nums []int) int {
    numsCnt := len(nums)
    
    if (numsCnt == 1) {
        return nums[0]
    }
    
    for slowKey := 0; slowKey < numsCnt; slowKey++ {
        fastKey := slowKey
        
        for fastKey < numsCnt {
            if nums[fastKey] > nums[slowKey] {
                nums[fastKey], nums[slowKey] = nums[slowKey], nums[fastKey]
            }
            
            fastKey++
        }
    }
    
    if numsCnt < 3 {
        return nums[0]
    }
    
    cnt := 0 
    
    for i := 1; i < len(nums); i++ {
        if nums[i-1] > nums[i] {
            cnt++
            if cnt == 2 {
                return nums[i]
            }
        }
    }
    
    return nums[0]
}