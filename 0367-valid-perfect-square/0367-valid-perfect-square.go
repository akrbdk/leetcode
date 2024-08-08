func isPerfectSquare(num int) bool {
    if num < 2 {
        return true
    }
    
    l, r := 0, num / 2
    
    for l <= r {
        mid := (r + l) / 2
        sqrt := mid * mid
        
        if sqrt == num {
            return true
        }
        
        if sqrt > num {
            r--
            continue
        }
        
        l++
    }
    
    return false
}