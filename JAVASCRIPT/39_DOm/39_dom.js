//1.요소를 선택하는 방법
// 1-1 ID로 선택하는 방법
const title = document.getElementById('title');

// 1-2 태그명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');

// for(let z = 0; z < li.length; z++){
    //     if (z %2===0){
        //         li[z].style.backgroundColor ='yellow';
        //     }
        //     else{
            //     li[z].style.backgroundColor ='red';
            //     }
            // }
            //탕수육 볶음밥 깐풍기는 배경색상을 오렌지 색
            //짜장면 짬뽕 라조기는 배경색상을 베이지색
            
            //3 .클래스명으로 요소를 선택하는 방법
            const noneli  = document.getElementsByClassName('none-li');
            
            //4. CSS 선택자로 요소를 선택하는 방법
            // querySelector() : 복수의 요소가 있다면 가장 첫번째 것만 선택
            const title2 = document.querySelector('#title');
            const li2 = document.querySelector('.none-li');
            
            //querySelectorAll() : 복수의 요소를 다가져옴
            const li3 = document.querySelectorAll('.none-li');
            
            //2.요소 조작하기
            
            //2-1 콘텐츨르 조작하는 방법
            // title.textContent :순수한 텍스트 데이터를 전달 ,이전의 태그들은 모두 제거
            title.textContent;
            // title.innerHTML : 태그는 태그로 인식해서 전달 ,이전의 태그들은 모두 제거
            document.innerHTML;
// 요소에 속성을 추가

const it = document.querySelector('#it');
// const it = document.getElementById('it');
// it.setAttribute('placeholder','셋어트리뷰트로 삽입')

const aa =document.getElementById('aa');
// aa.setAttribute('href','https://www.naver.com');

//요소의 속성을 제거
it.removeAttribute('placeholder');

//요소의 스타일링
// //인라인으로 스타일 추가
// aa.style.textDecoration = 'none';
// aa.style.color = 'blue';

//클래스로 스타일 추가
aa.classList.add('aa1','aa2','aa3');


//새로운 요소 만들기
//요소만들기
// const cli = document.createElement('li')
// cli.innerHTML = '야끼우동';

//요소를 자식요소의 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');
// ul[0].appendChild(cli);

// 요소를 특정 위치에 삽입하는 방법

const jab = document.createElement('li')
jab.innerHTML = '잡채밥';
const dong = document.createElement('li')
dong.innerHTML = '동파육';

const jam = li[2];
const ggan = li[5];

// ul[0].insertBefore(cli, jam);
ul[0].insertBefore(jab, ggan);
ul[0].insertBefore(dong, ggan);

//해당 요소를 지우는 방법
// cli.remove();

//라조기와 깐풍기 사이에 "잡채밥". "동파육"을 순서대로 넣고

for(let i=0; i< li.length; i++){
    li[i].style.backgroundColor ='yellow';
    li[++i].style.backgroundColor ='red';
}