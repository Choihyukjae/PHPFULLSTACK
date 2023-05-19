//2 특정 영역에 마우스 포인터가 진입하면 아래내용의 알러트가 나옵니다 
//  "두근두근"
//3 2번영역을 클릭하면 배경색이 베이지 색으로 바뀌어 나타납니다.
//3 번의 상태에서 다시한번더 클릭하면 아래의 알러트를 출력하고 배경색이 흰색으로 바뀌어 안보이게 됩니다
// "다시 숨는다"  

const btn1 = document.querySelector('#btn1');
btn1.addEventListener('mousedown',() => alert('안녕하세요 \n 숨어있는 div를 찾아보세요'));

const div1 = document.querySelector('#div1');
div1.addEventListener('mouseenter',dudu)


function dudu(){
    alert('두근두근');
}

function alert1(){
    alert('다시숨는다');
}

function alert2(){
    alert('들켰다');
}


function zzz(){
    if(div1.style.backgroundColor === "white")
    {
        div1.style.backgroundColor = "beige"
        alert2()
        div1.removeEventListener('mouseenter',dudu)
    }
    else{
        div1.style.backgroundColor = "white"
        
        alert1()
        div1.addEventListener('mouseenter',dudu)
        let land1 = Math.round( Math.random()*300) + "px";
        div1.style.margin = land1;
    }
    
}

div1.addEventListener('mousedown',zzz)






// function mouse1() {
//     div1.style.backgroundColor = "beige";
//     alert('들켰다');
//     count = 1;
//     return count ;
// }

// function mouse2() {
//     div1.style.backgroundColor = "white";
//     alert('다시숨는다');
//     }

//     div1.addEventListener('mousedown',() => mouse1());

// if (count == 1) {
//     div1.removeEventListener('mousedown', mouse1());
// }

// if(count == 1){
//     div1.addEventListener('mousedown',() => mouse2() );
// }


// div1.addEventListener('mousedown',() => mouse2() );


// function mouse4(){
//         div1.addEventListener('mousedown',() => mouse2() );
//         div1.addEventListener('mousedown',() => alert('다시숨는다'));
        
//     }
    


// div1.addEventListener('mousedown',() => mouse3());

// div1.removeEventListener('mousedown', mouse3());




// for (let i = 0; i < 1; i++) {
//   div1.addEventListener('click', mouse3() {
//     for (let j = 0; j < 1; j++) {
      
//     }
    
//   });
// }


// for (let i = 1; i < 2; i++) {
//     div1.addEventListener('mousedown',() => mouse3());

// div1.removeEventListener('mousedown', mouse3());

// div1.addEventListener('mousedown',() => mouse4() );
// }
// div1.addEventListener('mousedown',() => mouse2());


