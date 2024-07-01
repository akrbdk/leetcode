func isHappy(n int) bool {
    seen := make(map[int]bool)
    
    for n != 1 && !seen[n] {
        seen[n] = true
        n = sumDigits(n)
    }
    
    return n == 1
}

func sumDigits(n int) int {
    sum := 0
    
    for n > 0 {
        lastNum := n % 10
        sum += lastNum * lastNum
        n /= 10
    }
    
    return sum
}