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


1회원정보 테이블
회원번호, 아이디, 이름 , 주소
2 주문리스트 테이블
주문번호, 상품번호 배송상태
3 상품 리스트 테이블
상품번호 상품가격 상품명




성적관리시스템

학생정보
/학생번호 stu_no
/학생이름 stu_name
/전공과목	major
/주소 
/전화번호
/성별


성적정보
/학생번호 stu_no
/전공성적 magjor_grade
/석차

교수정보
/교수번호 pro_no
/교수이름 pro_name
/교수나이 pro_age
/전공과목 major


과목정보 
/전공이름 major
/교수이름 pro_name
/교수번호 pro_no
/강의시간  lecture_date






------------------------------------------
1학생정보테이블
	학번
	생년월일
	이름 
	주소
   전화번호
	성별
	입학일
	졸업일
	재학상태

2성적정보테이블
	학번
	과목번호
	과목점수
	과목석차
	이수일자ㅇ
3 교수정보테이블
	교수번호
	이름
	생년월일
	학위번호
	이메일
	직급
	연구실번호
	성별
	임용일
	
4 과목정보테이블
	과목번호
	과목명
	교수번호
	정원수
	강의학기 
	강의호실
	강의시작시간
	강의종료시간
	교재번호
	필수이수
5.교재정보 테이블
	교재번호
	교재명	
	
100
자바-91

100
부모의 PK
자식의 PK,FK






