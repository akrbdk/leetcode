func longestPalindrome(s string) string {
    var result string
    
    for i := 0; i < len(s); i++ {
        result = palindrome(s, i, i, result)
        result = palindrome(s, i, i+1, result)
    }
    
    return result
}

func palindrome(s string, i int, j int, result string) string {
    var substring string
    
    for i >= 0 && j < len(s) && s[i] == s[j] {
        substring = s[i:j+1]
        i--
        j++
    }
    
    if len(substring) > len(result) {
        return substring
    }
    
    return result
}