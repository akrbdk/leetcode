func arrangeCoins(n int) int {
    var ans int
    
    for i := 1; i <= n; i++ {
        if n < i {
            return ans
        }
        
        ans++
        n -= i
    }
    
    return ans
}