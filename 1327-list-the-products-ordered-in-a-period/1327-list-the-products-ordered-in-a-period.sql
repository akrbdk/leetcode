# Write your MySQL query statement below
SELECT product_name, SUM(unit) AS unit
FROM Products AS p
JOIN Orders AS o ON o.product_id = p.product_id 
WHERE o.order_date BETWEEN '2020-02-01' AND '2020-02-29'
GROUP BY p.product_id
HAVING SUM(unit) >= 100