func addStrings(num1 string, num2 string) string {
    
    i := len(num1) - 1
    j := len(num2) - 1
    carry := 0

    var ans string
    
    for i >= 0 || j >= 0 || carry > 0 {
        sum := carry
        
        if i >= 0 {
            sum += int(num1[i] - '0')
        }
        
        if j >= 0 {
            sum += int(num2[j] - '0')
        }
        
        carry = sum / 10
        ans = string(sum % 10 + '0') + ans
        
        i--
        j--
    }
    
    return ans
}