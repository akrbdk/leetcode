func isIsomorphic(s string, t string) bool {
    a1, a2 := make(map[byte]int), make(map[byte]int)
    
    for i := 0; i < len(t); i++ {
        if a1[s[i]] != a2[t[i]] {
            return false
        }
        
        a1[s[i]] = i + 1
        a2[t[i]] = i + 1
    }
    
    return true
}