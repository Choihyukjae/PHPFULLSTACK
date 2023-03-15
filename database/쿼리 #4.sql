SELECT emp_no,first_name
FROM employees
WHERE  emp_no =(
					SELECT emp_no
					FROM salaries
					ORDER BY salary desc LIMIT 1 );
					
SELECT emp_no,first_name
FROM employees
WHERE  emp_no =(
					SELECT emp_no
					FROM salaries
					ORDER BY salary asc LIMIT 1 )
				OR emp_no =  (
					SELECT emp_no
					FROM salaries
					ORDER BY salary DESC LIMIT 1 );


SELECT AVG(salary)
FROM salaries




SELECT AVG(salary)
FROM salaries 
WHERE emp_no = 499975;

SELECT emp_no, first_name
From employees
WHERE emp_no IN(
		SELECT emp_no
		FROM salaries
		WHERE salary)IN(
			SELECT 
			max(salary),min(salary)
			FROM salaries 
				);


SELECT CONVERT(1234,CHAR(4) );

SELECT emp_no ,if( emp_no = 10001  ,first_name , birth_date)
FROM employees;\
SELECT IFNULL('123','aa');




SELECT 
	emp_no,gender,case gender 
	when 'M' then '남자'
	when 'f' then '여자'
	ELSE ''
	END 
FROM employees LIMIT 10;

SELECT emp_no AS '사원번호',  case title
	when 'Senior Engineer' then '관리자'
	ELSE '팀원'
	END AS 'k_title'
	FROM titles ;

