SELECT *
FROM employees
WHERE emp_no IN(10001, 10005)
;

SELECT *
FROM employees
WHERE first_name LIKE('m___');

SELECT emp_no,title
FROM titles
WHERE title LIKE('%Engineer%');

SELECT DISTINCT *
FROM dept_emp
;


SELECT *
FROM employees
LIMIT 10 OFFSET 4;


SELECT *
FROM employees
ORDER BY first_name ASC, last_name DESC ;


SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001;


SELECT AVG(salary)
FROM salaries;

SELECT MAX(salary)
FROM salaries;

SELECT min(salary)
FROM salaries;



SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title)>=100000;


SELECT emp_no, avg(salary) AS avg_s
FROM salaries
GROUP BY emp_no HAVING avg_s>=30000
AND avg_s<=50000;


SELECT *
FROM dept_manager
WHERE dept_no = (
						SELECT dept_no
						fROM dept_manager
						WHERE emp_no IN(110344, 111035)
					);



SELECT emp_no , first_name , last_name, gender
FROM employees
WHERE emp_no in(
						SELECT emp_no
						FROM salaries
						GROUP by emp_no HAVING AVG(salary)>=70000
					);
					



SELECT *
FROM titles
WHERE emp_no = 10009 
AND to_date >= NOW();



 
SELECT emp_no , last_name
FROM employees
WHERE emp_no  IN(SELECT emp_no
					FROM titles
					WHERE to_date >= NOW()
					AND title ='Senior Engineer'
					);

 
 
 
 
 

