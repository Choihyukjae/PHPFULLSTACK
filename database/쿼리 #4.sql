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



SELECT CONCAT('안녕하세요','은아침입니다.');


SELECT CONCAT(first_name,' ',last_name)
FROM employees
WHERE emp_no = 500000;

SELECT CONCAT_WS('/','a','b','c');


select FORMAT (123456,2);


SELECT LEFT ('abcdefg',3);


SELECT LOWER ('ABC');


SELECT rPAD('abc',7,'@');


SELECT TRIM('   abc');



SELECT TRIM(LEADING 'abc' FROM 'abcdef');


SELECT SUBSTRING('abcdef',2,4);

SELECT SUBSTRING_INDEX('ab.cd.ef.gh','.',3);


SELECT TRUNCATE(2.1111111,4);


SELECT NOW();

SELECT DATE(NOW());

SELECT ADDDATE(NOW(),INTERVAL -1 MONTH);

SELECT SUBDATE(NOW(),INTERVAL 1 DAY);

SELECT ADDTIME(NOW(), '-10:13:16');


SELECT emp_no, RANK() over(ORDER BY salary ASC) r, salary
FROM salaries ;

SELECT emp_no, ROW_NUMBER() over(ORDER BY salary ASC) r, salary
FROM salaries ;