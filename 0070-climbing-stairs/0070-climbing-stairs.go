func climbStairs(n int) int {
    first, second := 1, 1
    for ; n > 1; n-- {
        first, second = second, first + second
    }
    
    return second
}