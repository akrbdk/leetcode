func intersection(nums1 []int, nums2 []int) []int {
    mapCnt := map[int]bool{}
    ans := []int{}
    
    for _, val := range nums1 {
        mapCnt[val] = true
    }
    
    for _, val := range nums2 {
        if mapCnt[val] == true {
            ans = append(ans, val)
            mapCnt[val] = false
        }
    }
    
    return ans
}