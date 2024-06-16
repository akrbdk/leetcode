func mySqrt(x int) int {
    if x == 1 {
        return x
    }
    
    l, r := 1, x
    var res int
    
    for l <= r {
        mid := l + (r - l) / 2
        
        if (mid * mid) == x {
            return mid
        } else if (mid * mid) < x {
            res = mid
            l = mid + 1
        } else {
            r = mid - 1
        }
    }
    
    return res
}