

// DATE 
const NOW = new Date('2023-4-30 11:06:54');

// getFullYear() : 연도만 가져오는 메소드 
NOW.getFullYear();

// getMonth() : 월 만 가져오는 메소드 
NOW.getMonth()+1;

// getDate() : 날짜만  가져오는 메소드 
NOW.getDate();



// getDay() : 요일을 가져오는 메소드 일 = 0 월 = 1 화 =2 수 = 3 목 = 4 금 = 5 토 = 6  
NOW.getDay();

//getTime() : 1970/01/01 기준으로 몇초가 지났는지 
NOW.getTime();

//getHours() : 시간을 가져오는 메소드
NOW.getHours();

//getMinutes() : 분을 가져오는 메소드
NOW.getMinutes();

//getSeconds() : 초을 가져오는 메소드
NOW.getSeconds();

NOW.getMilliseconds();

const DAY = new Date('2022-9-30 19:20:10');
const DAY1 = new Date();
let result = Math.ceil((DAY1 - DAY)/86400000) ;
// console.log(Math.ceil(result));
let result_month = Math.ceil((result/30.4 ));
let result_hours = Math.ceil(((result*24 ) ));
let result_minute = Math.ceil(((result*1440 ) ));
let result_second = Math.ceil(((result*86000 ) ));
// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘부터 몇일 전인지 출력해주세요