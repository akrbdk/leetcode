func isValid(s string) bool {
    var tags = map[rune]rune{
        '(': ')',
        '{': '}',
        '[': ']',
    }
    
    stack := make([]rune, 0)
    
    for _,char := range s {
        closeTag, ok := tags[char]
        if ok {
            stack = append(stack, closeTag)
            continue
        }
        
        stackLen := len(stack)
        if stackLen == 0 || stack[stackLen - 1] != char {
            return false
        }
        
        stack = stack[:stackLen - 1]
    }
    
    return len(stack) == 0
}