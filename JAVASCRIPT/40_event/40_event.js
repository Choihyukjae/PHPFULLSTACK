//인라인 이벤트 등록
//html 파일의 11행 13행 참조
// onclick


//프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function(){
    location.href = "https://www.google.com"
}

// addEventListener ( eventType, function) 방식
const btn2 = document.querySelector('#btn2');

//현재창에서 열기
// btn2.addEventListener('click',() => {
//     location.href = 'https://www.daum.net';
// })


팝업 창 열기
let newWindow = null;
btn2.addEventListener('click',() => {
   newWindow = open('http://www.daum.net','','width=500 height=500');
});
//팝업창 닫기 
const btn3 = document.getElementById('btn3');
btn3.addEventListener('click',popUpClose(newWindow));
 
 //이벤트 삭제
 removeEventListener(eventType, function)
 addEventListener()로 등록한 이벤트의 인수와 같은 인수를 세팅해야 삭제됨
 btn3.removeEventListener('click',popUpClose(newWindow));

 function popUpClose(win) {
    newWindow.close();
 }


 // 이벤트 타입
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown',() => alert('div1 클릭'));
div1.addEventListener('mouseenter',() => alert('div1 진입'));



