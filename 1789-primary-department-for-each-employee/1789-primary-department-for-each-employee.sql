# Write your MySQL query statement below
WITH single_deps(id) AS (
    SELECT employee_id
    FROM Employee
    GROUP BY employee_id
    HAVING COUNT(department_id) = 1
)
SELECT employee_id, department_id
FROM Employee
WHERE employee_id IN (SELECT DISTINCT id FROM single_deps) OR primary_flag = 'Y';