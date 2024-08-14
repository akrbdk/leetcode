func repeatedSubstringPattern(s string) bool {
    sLen := len(s)
    
    for i := (sLen / 2); i >= 1; i-- {
        if sLen % i != 0 {
            continue
        }
        
        sub := s[:i]
        var tmpS string
        
        for j := 0; j < (sLen / len(sub)); j++ {
            tmpS += sub
        }
                                
        if tmpS == s {
            return true
        }
    }
    
    return false
}