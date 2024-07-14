# Write your MySQL query statement below
SELECT 
    id,
    SUM(if(month = 'Jan', revenue, NULL)) AS Jan_Revenue,
    SUM(if(month = 'Feb', revenue, NULL)) AS Feb_Revenue,
    SUM(if(month = 'Mar', revenue, NULL)) AS Mar_Revenue,
    SUM(if(month = 'Apr', revenue, NULL)) AS Apr_Revenue,
    SUM(if(month = 'May', revenue, NULL)) AS May_Revenue,
    SUM(if(month = 'Jun', revenue, NULL)) AS Jun_Revenue,
    SUM(if(month = 'Jul', revenue, NULL)) AS Jul_Revenue,
    SUM(if(month = 'Aug', revenue, NULL)) AS Aug_Revenue,
    SUM(if(month = 'Sep', revenue, NULL)) AS Sep_Revenue,
    SUM(if(month = 'Oct', revenue, NULL)) AS Oct_Revenue,
    SUM(if(month = 'Nov', revenue, NULL)) AS Nov_Revenue,
    SUM(if(month = 'Dec', revenue, NULL)) AS Dec_Revenue
FROM Department
GROUP BY id