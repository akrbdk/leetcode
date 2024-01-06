func setZeroes(matrix [][]int)  {
    row := make(map[int]bool)
    col := make(map[int]bool)
    m := len(matrix)
    n := len(matrix[0])
    for i := 0; i < m; i++ {
        for j := 0; j < n; j++ {
            if matrix[i][j] == 0 {
                row[i] = true
                col[j] = true
            }
        }
    }
    for i := 0; i < m; i++ {
        for j := 0; j < n; j++ {
            if row[i] || col[j] { matrix[i][j] = 0 }
        }
    }
}