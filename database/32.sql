CREATE TABLE test_member(
	mem_no  INT(11) PRIMARY KEY 
	,mem_name VARCHAR(50)
	); 
	
	
INSERT INTO test_member (mem_name)
VALUES ('최혁');

SELECT *
FROM test_member ;

DELETE 
FROM test_member 
WHERE mem_no = 2 ;

ALTER table test_member AUTO_INCREMENT = 10;

SHOW INDEX 
FROM employees ;

CREATE INDEX idx_employees_last_name 
ON employees(last_name);

DROP INDEX idx_employees_last_name ON employees;


SELECT *
FROM employees
WHERE last_name = 'swan';


CREATE TABLE student_info(
	`stu_no` INT(11)		 
	,`stu_birth` DATE	NOT NULL
	,`stu_name`	VARCHAR(20)  NOT NULL
	,`stu_addr`	VARCHAR(100) NOT NULL
	,`stu_tell`	CHAR(11) NOT NULL
	,`stu_gender` ENUM('M','F') NOT NULL
	,`stu_ent`	DATE  NOT NULL 
	,`stu_fin`	DATE 
	,`stu_learn`	ENUM('Y','N') NOT NULL
	,CONSTRAINT PK_student_info_stu_no PRIMARY KEY(stu_no)
);

CREATE TABLE grade_info(
	`stu_no`	INT(11)	NOT NULL	
	,`sub_no` INT(11)	NOT NULL	
	,`sub_score` INT(3)	NOT NULL
	,`sub_rank`	INT(10)NOT NULL	
	,`sub_fin` DATE
	,CONSTRAINT PK_grade_info_sub_no PRIMARY KEY(stu_no,sub_no)
);



CREATE TABLE professor_info (
	`pro_no`	INT(11)
	,`pro_name` VARCHAR(20)	NOT NULL
	,`pro_birth`	DATE  NOT NULL
	,`pro_dgno` INT(11)	NOT NULL	
	,`pro_em`	 VARCHAR(50) NOT NULL	
	,`pro_po`	VARCHAR(20) NOT NULL	
	,`pro_offno`	INT(15) NOT NULL 
	,`pro_gender` ENUM('M','F') 	NOT NULL
	,`pro_app` DATE	NOT NULL	
	,CONSTRAINT PK_professor_info_pro_no PRIMARY KEY(pro_no)
);
create table subject_info (
	`sub_no` INT(11)
	,`sub_name`	 VARCHAR(20)NOT NULL
	,`sub_people` INT(5) NOT NULL 	
	,`lec_sem` VARCHAR(20)	NOT NULL	
	,`lec_off` INT(11)	NOT NULL
	,`lec_sta` DATETIME NOT NULL 	
	,`lec_fin` DATETIME NOT NULL 
	,`sub_cp`	ENUM('Y','N')  NOT NULL	
	,`book_no` INT(15) NOT NULL 
	,`pro_no`	INT(11) NOT NULL
	,CONSTRAINT PK_subject_info_sub_no PRIMARY KEY(sub_no));

CREATE TABLE book_info (
	`book_no` INT(15) 
	,`book_name` VARCHAR(20)
	,CONSTRAINT PK_book_info_book_no PRIMARY KEY(book_no));




DELIMITER $$
CREATE PROCEDURE test_proc(
IN in_num INT
)
BEGIN 
SELECT *
FROM employees
LIMIT in_num  ; 
END $$
DELIMITER ;


CALL test_proc(10);

COMMIT;
DROP PROCEDURE test_proc;

employeesDELIMITER $$
CREATE FUNCTION fc_sum(num INT)
	RETURNS INT 
BEGIN 
	RETURN num+num+num;
END $$
DELIMITER ;


SELECT fc_sum(3);

DROP FUNCTION fc_sum;


DELIMITER$$
CREATE PROCEDURE test()
BEGIN 
DECLARE sal INT 
DECLARE sum_sal INT ;
DECLARE cur_sal INT ;
DECLARE and_row BOOLEAN DEFAULT FALSE ;

DECLARE cur_sal CURSOR FOR 
	SELECT salary FROM salaries WHERE emp_no = 10001;
	
DECLARE CONTINUE hander FOR NOT FOUND
	SET end_row = TRUE;
	OPEN cur_sal;
	cursor_loof: LOOP 
	FETCH cur_sal INTO sal;
	IF end_row THEN
	LEAVE cursor_loop;
	END IF;
	SET sum_sal = sum_sal +sal;
	END LOOP cursor_loopl;
	SELECT sum_sal;
	END$$
	DELIMITER ;
	

	DELIMITER $$
	CREATE TRIGGER test_update
	AFTER UPDATE
	ON departments
	FOR EACH ROW
	BEGIN
		UPDATE departments
		SET dept_name = 'trigger test'
		WHERE dept_no = 'd010';
	END $$
	DELIMITER ;
	
	
	
	
	
	UPDATE departments
	SET dept_name = 'update test'
	WHERE dept_no = 'd010';
	
	
	CREATE TABLE test_text(
	 txt_no INT PRIMARY KEY AUTO_INCREMENT
	 	,f_text VARCHAR(4000)
	 , FULLTEXT idx_full_test_text_f_text(f_text)
	 );


	INSERT INTO test_text(f_text) VALUES ('동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세');
	INSERT INTO test_text(f_text) VALUES ('무궁화 삼천리 화려강산 대한사람 대한으로 길이 보전하세');
	INSERT INTO test_text(f_text) VALUES ('남산위에 저소나무 철갑을 두른듯 바람서리 불변함은 우리 기상일세');
	INSERT INTO test_text(f_text) VALUES ('가을 하늘 공활한데 높고 구름 없이 밝은 달은 우리 가슴 일편단심일세 ');
	INSERT INTO test_text(f_text) VALUES ('이 기상과 이 마음으로 충성을 다하여 괴로우나 즐거우나 나라사랑하세 ');
	
	SELECT *
	FROM test_text
	WHERE MATCH(f_text) AGAINST('동해물과');
	
	
	
	SELECT emp.emp_no, emp.first_name,dep.dept_no, depts.dept_name
	FROM employees emp INNER JOIN dept_emp dep
	ON emp.emp_no = dep.emp_no INNER JOIN departments depts 
	ON dep.dept_no = depts.dept_no
	WHERE emp.emp_no = 10001;
							
	
	