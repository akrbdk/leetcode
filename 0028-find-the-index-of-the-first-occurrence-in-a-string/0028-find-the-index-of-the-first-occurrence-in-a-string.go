func strStr(haystack string, needle string) int {
    n := len(needle)
    
    if n == 0 {
        return n
    }
    
    for i := 0; i < len(haystack) - n + 1; i++ {
        if haystack[i:i+n] == needle {
            return i
        }
    }
    
    return -1
}