func firstUniqChar(s string) int {
    lCnt := make(map[rune]int)
    
    for _, val := range s {
        lCnt[val]++
    }
    
    for key, val := range s {
        if lCnt[val] == 1 {
            return key
        }
    }
    
    return -1
}