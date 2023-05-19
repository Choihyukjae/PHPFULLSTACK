// setTimeout(function(){
//     console.log('A');
// }, 3000);

// setTimeout(function(){
//     console.log('B');
// }, 2000);

// setTimeout(function(){
//     console.log('C');
// }, 1000);

// 1. 콜백함수를 이용해서 A B  C 순서로 콘솔에 출력해주요

// function kk1(){setTimeout(function(){
//     console.log('A');
//         setTimeout(function(){
//         console.log('B');
//             setTimeout(function(){
//             console.log('C');
//             }, 1000);
//         }, 2000);
// }, 3000)};
// kk1();

// 2. Promise 를 이용해서  A B C 순서로 콘솔에 출력해 주세요.
// 함수 등록해서 promise 사용
// function myPromise(){
//     return new Promise((resolve, reject) => {
//         const data = true;

//         if( data ){
//             resolve('성공');
//         }else{
//             reject('error');
//         }
//     })
// }


//  gffdfdsfds/////////
// function a() {
//     return new Promise((resolve, reject) => {
//         setTimeout(function(){
//             resolve(console.log('A'));
//         }, 3000);
            
//         })
// }
// function b() {
//     return new Promise((resolve, reject) => {
//         setTimeout(function(){
//             resolve(console.log('B'));
//         }, 2000);
            
//         })
// }
// function c() {
//     return new Promise((resolve, reject) => {
//         setTimeout(function(){
//             resolve(console.log('C'));
//         }, 1000);
            
//         })
// }

// function abc(){
//     return a()
//     .then(()=> b())
//     .then(()=> c())
// }
// abc()

function myPromise(str, time) {
    return new Promise((resolve) =>{
    setTimeout(() => {
        resolve(console.log(str))}, time);
    });
    }

myPromise('A', 3000)
.then(() => myPromise('B', 2000))
.then(() => myPromise('C', 1000))
