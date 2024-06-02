func longestCommonPrefix(strs []string) string {
    prefix := ""
    
    if len(strs) == 0 {
        return prefix
    }
    
    first := strs[0];
    
    for i := 0; i < len(first); i++ {
        
        flag := true
        
        for s := 0; s < len(strs); s++ {
            if i >= len(strs[s]) {
                flag = false
                break
            }
            if string(first[i]) != string(strs[s][i]) {
                flag = false
            }
        }
        
        if flag {
            prefix += string(first[i])
            continue
        }
        
        return prefix
    }
    
    return prefix
}