INSERT INTO test_emp(
MEM_NO 
	,MEM_NAME 
	,MEM_AGE 
	,MEM_SEX 
	,MEM_SIGNIN_DATE 
	,MEM_SIGNOUT_DATE 
)
VALUES(
 4
 ,'최혁재'
 ,26
 ,'M'
 ,NOW()
 ,NULL
 );
COMMIT ;

SELECT *
FROM test_tbl;

COMMIT;

DELETE 
FROM test_tbl;

TRUNCATE TABLE test_tbl;
emp ,tit ,sal


