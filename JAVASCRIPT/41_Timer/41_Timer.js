//타이머 함수

// 1. setTimeout() / clearTimeout() 
// const timeOut = setTimeout(()=> console.log('fu'),2000 ); // 타이머 셋팅

// clearTimeout(timeOut);// 타이머 제거


// //2 . setInterval() / clearInterval()
// const myInterval = setInterval(()=> console.log('fu'), 1000 ); // 인터벌 셋팅
// clearInterval(myInterval);//인터벌 제거
// let i = 1
// function in1(){
//     if(i<6){
//         console.log(i)
//         i++
//         // return i ;
//     }
//     else{
//         clearInterval(myInterval1);//인터벌 제거
//     }
// }
// const myInterval1 = setInterval(()=> in1(), 1000 ); // 인터벌 셋팅
// const myInterval2 = setInterval(()=> console.log(2), 1000 ); // 인터벌 셋팅
// const myInterval3 = setInterval(()=> console.log(3), 1000 ); // 인터벌 셋팅
// const myInterval4 = setInterval(()=> console.log(4), 1000 ); // 인터벌 셋팅
// const myInterval5 = setInterval(()=> console.log(5), 1000 ); // 인터벌 셋팅



function tt(){
    var clock = document.querySelector('#clock');
    const today = new Date();
    const hours = today.getHours(); 
    const minutes = today.getMinutes();  
    const seconds = today.getSeconds();  
   clock.innerText = (hours<10? '0'+hours : hours)+ ":"  + (minutes<10? '0'+minutes : minutes)+ ":" + (seconds<10? '0'+seconds : seconds);
}

let init = setInterval(tt, 1000);


function rmtt(){
    clearInterval(init);
}

function rmtt1(){
    init = setInterval(tt, 1000);
}
const btn1 = document.querySelector('#btn1');
const btn2 = document.querySelector('#btn2');

btn1.addEventListener('mousedown',rmtt);
btn2.addEventListener('mousedown',rmtt1);



// init();
// 1~5를 1초마다 콘솔에 출력해주세요
// function fo1(){
// for (let i = 1; i < 6; i++) {
//     console.log($i)
//         }
//     }