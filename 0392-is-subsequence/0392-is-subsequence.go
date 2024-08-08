func isSubsequence(s string, t string) bool {
    sLen := len(s)
    tLen := len(t)
    
    if sLen == 0 {
        return true
    }
    
    if sLen > tLen {
        return false
    }
    
    l := 0
    
    for i := 0; i < tLen; i++ {
        if l == sLen {
            return true
        }
        
        if s[l] == t[i] {
            l++
        }
    }
        
    return l == sLen
}