func lengthOfLastWord(s string) int {
    len := 0
    reset := false
    
    for _, val := range s {
        if val == ' ' {
            reset = true
            continue
        }
        
        if reset == true {
            len = 0
            reset = false
        }
        
        len++
    }
    
    return len
}