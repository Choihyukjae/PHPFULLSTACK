SELECT emp.emp_no, tit.title, concat(first_name,last_name)
FROM employees AS emp
	INNER JOIN titles AS tit   
		ON emp.emp_no = tit.emp_no
WHERE tit.to_date >= NOW();




SELECT emp.emp_no, emp.gender ,sal.salary
FROM employees AS emp INNER JOIN salaries AS sal  
ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW();




SELECT emp.emp_no,CONCAT(first_name,last_name),dpt.dept_no
FROM employees AS emp INNER JOIN dept_emp AS dpt
ON emp.emp_no = dpt.emp_no 
WHERE dpt.to_date >= NOW();

COMMIT ;