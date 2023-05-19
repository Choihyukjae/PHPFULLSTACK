
//동기처리


// function delay() {
//     const delaytTime = Date.now() +2000;
//     while(Date.now()< delaytTime) {}
//     console.log('B');
// }

// console.log('A');
// delay();
// console.log('C');

//promise를 이용해서 비동기처리

// function delay2() {
//     return new Promise(function(resolve){
//         const delaytTime = Date.now() +2000;
//         while(Date.now()< delaytTime) {}
//         resolve('B');
//     });
  
// }


// function delay2() {
//     return new Promise((resolve) => {
//         const delaytTime = Date.now() +2000;
//         while(Date.now()< delaytTime) {}
//         resolve('B');
//     });
// }

// console.log('A');
// delay2().then(b => console.log(b));
// console.log('C');


//async로 비동기 처리

// async function delay() {
//     const delaytTime = Date.now() +2000;
//     while(Date.now()< delaytTime) {}
//     return 'B';
// }

// console.log('A');
// delay().then(b => console.log(b));
// console.log('C');

//3 await : async가 붙은 함수안에서만 사용 가능

function myDelay(ms) {
    return new Promise(resolve =>setTimeout(resolve,ms) );
    // setTimeout(() => {},ms)
}

async function getA (){
    await myDelay(4000);
    return ' A';
}

async function getB (){
    await myDelay(5000);
    return ' B';
}
async function getC (){
    await myDelay(5000);
    return ' C';
}

// getA().then((stra)=> console.log(stra) );
// promise 방식으로 출력
// getA()
// .then(stra=> {return getB()
// .then(strb => console.log(`${stra} : ${strb}`))
// });

//async 를 이용할 경우

// async function getAll(){
//     const strA = await getA();
//     const strB = await getB();
    
    console.log(strA + " : " + strB);

// }
// getAll();


//병렬처리 방법 


async function getAll(){
    Promise.all([getA(),getB(),getC()])
    .then(all => console.log(all.join(' : ')));


}
getAll();


