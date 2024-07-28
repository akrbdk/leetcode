func isPowerOfTwo(n int) bool {
    tmp := 1
    
    for tmp < n {
        tmp *= 2
    }
    
    return tmp == n
}