func getRow(rowIndex int) []int {
    ans := make([][]int, rowIndex + 1)
    
    for row := 0; row <= rowIndex; row++ {
        ans[row] = make([]int, row + 1)
        ans[row][0] = 1
        ans[row][row] = 1
        for col := 1; col < row; col++ {
            ans[row][col] = ans[row - 1][col - 1] + ans[row - 1][col]
        }
    }
    
    return ans[rowIndex]
}