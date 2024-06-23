func maxProfit(prices []int) int {
    minPrice := prices[0]
    maxProfit := 0
    
    for i := 1; i < len(prices); i++ {
        minPrice = min(minPrice, prices[i])
        maxProfit = max(maxProfit, prices[i] - minPrice)
    }
    
    return maxProfit
}

func min(i, j int) int {
    if i < j {
        return i
    }
    
    return j
}

func max(i, j int) int {
    if i > j {
        return i
    }
    
    return j
}