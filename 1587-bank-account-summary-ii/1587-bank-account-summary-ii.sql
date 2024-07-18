# Write your MySQL query statement below
SELECT u.name, IFNULL(SUM(t.amount), 0) AS balance
FROM Users AS u
JOIN Transactions AS t ON t.account = u.account
GROUP BY u.account
HAVING balance > 10000;