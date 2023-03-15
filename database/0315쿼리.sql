UPDATE departments 
SET dept_name = '1000'
WHERE dept_no ='d001';

UPDATE employees
SET birth_date = DATE(19980413)
WHERE emp_no =500000;

SELECT *
FROM employees
WHERE emp_no = 500000;

DELETE 
FROM departments;

SELECT *
FROM departments;

SELECT *
FROM employees;
WHERE emp_no = 500000;

INSERT INTO employees(
 emp_no
,birth_date
,first_name
,last_name
,gender
,hire_date
)

VALUES
(
 500000
,NOW()
,'hyukjae'
,'Choi'
,'M'
,NOW()
);
 
