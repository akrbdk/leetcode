func licenseKeyFormatting(s string, k int) string {
    
    s = strings.ToUpper(s)
    var ans []byte
    var n int
    
    for i := len(s) - 1; i >= 0; i-- {
        if s[i] == '-' {
            continue
        }
        
        if n == k {
            ans = append([]byte{'-'}, ans...)
            n = 0
        }
        
        ans = append([]byte{s[i]}, ans...)
        n++
    }
    
    return string(ans)
}