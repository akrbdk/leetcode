func detectCapitalUse(word string) bool {
    count := 0
    dict := []string{"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"}
    
    for i := 0; i < len(word); i++ {
        for _, v := range dict {
            if string(word[i]) == v {
                count++
            }
        }
    }
    
    if (count == 1 && len(word) > 1) {
        for _, v := range dict {
            if string(word[0]) == v {
                return true
            }
        }
    }
    
    return count == 0 || count == len(word)
}