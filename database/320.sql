CREATE VIEW TEST_VIEW
AS
	SELECT tit.title, CEILING(AVG(salary)) 
FROM salaries sal INNER JOIN titles tit
ON sal.emp_no = tit.emp_no
WHERE tit.to_date > NOW() AND sal.to_date>NOW()
GROUP BY title 
HAVING AVG(salary)>=60000
ORDER BY AVG(salary) DESC ;

CREATE VIEW TEST_VIEW1
AS
SELECT emp.emp_no
	,CONCAT_WS(' ',last_name,first_name)
	,d_m.dept_name
FROM employees AS emp
	INNER JOIN dept_emp AS d_e
	ON emp.emp_no=d_e.emp_no
	INNER JOIN departments AS d_m
	ON d_m.dept_no=d_e.dept_no
	WHERE d_e.to_date>=NOW()
	ORDER BY emp.emp_no
;

SELECT *
FROM TEST_VIEW1