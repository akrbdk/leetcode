func fizzBuzz(n int) []string {
    ans := []string{}
    
    for i := 1; i <= n; i++ {
        by3 := (i % 3) == 0
        by5 := (i % 5) == 0
        
        if by3 && by5 {
            ans = append(ans, "FizzBuzz")
        } else if by3 {
            ans = append(ans, "Fizz")
        } else if by5 {
            ans = append(ans, "Buzz")
        } else {
            ans = append(ans, strconv.Itoa(i))
        }
    }
    
    return ans
}