func isPalindrome(s string) bool {
    s = strings.Map(
        func(r rune) rune {
            if !unicode.IsLetter(r) && !unicode.IsNumber(r) {
                return -1
            }

            return unicode.ToLower(r)
        }, 
        s,
    )
    
    first, last := 0, len(s) - 1
    
    for first < last {
        if s[first] != s[last] {
            return false
        }
        
        first++
        last--
    }
    
    return true
}