
// let arr = [1,2,3,4,5];


// // push() 메소드 : 배열에 값 추가
// arr.push(6);

// // delete : 배열의 값 삭제(인덱스는 남아 있다.)
// delete arr[5];

// // splice() 메소드 : 배열의 요소를 삭제 또는 교체
// // arr = [1,2,3,4,5];
// // arr.splice(2,1);// 배열에서 arr[2]가 삭제
// // arr.splice(2,0,3)// 배열의 arr[2]뒤에 값 3을 추가
// // arr.splice(2,1,3)// 배열의 arr[2]의 값을 3으로 변경
// // arr.splice(2,1,3,4,5,6,7)// 3번째 매개변수부터는 가변파라미터로 모든 값을 추가

// // indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용 lastIndexOf 마지막부터 찾음
// // let arr2 = [1,2,3,4,5];

// // arr2 =[1,2,3,4,3,5,6,6,1];

// // let fileName = 'javascript.log.php'; 
// // fileName = 'ttt.aa.dd';
// // let first = fileName.indexOf('.');
// // let second = fileName.lastIndexOf('.');
// // fileName.slice(0,first)
// // fileName.slice(first+1,second)
// // fileName.slice(second+1,fileName.length)

// // concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환

// let arr1 = [1,2,3];
// let arr2 = [10,20,30];
// let arr4 = [100,200,300];
// let arr3 = arr1.concat(arr2,arr4);

// // includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별

// let arrInc = [1,2,3,4];
// // console.log(arrInc.includes( 5 ));


// //sort( )메소드 : 배열의 요소를 아스키코드 기준으로  정렬해서 반환

// const arrSort = [6,3,5,8,748,23,3,12,7];
// // arrSort.sort(); //[12, 23, 3, 3, 5, 6, 7, 748, 8]

// //오름차순
// arrSort.sort(
//     function(a, b){
//         return a -b ;
//     }
// );
// arrSort.sort((a,b ) => a-b );

// //내림차순
// arrSort.sort(
//     function(a, b){
//         return b - a ;   
//     }
// );
// arrSort.sort((a,b ) => b-a );

// //join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열 만들어 줍니다.
// const arrJoin = ["안녕", "하세", "요"];
// arrJoin.join('');


// //every() 메소드 : 배열의 요소들이 주어진 함수를 통과하는 지 판별
// const arrEvery = [1,2,3,4,5];
// let result = arrEvery.every(
//     function( val){
//         return val%2 == 0 ;
//     }
// );

// result = arrEvery.every((val) => val%2 == 0 );
// console.log(result);

// // 모든 요소의2로나눈 나머지가 0인지 판별해주세요


// //some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별

// const arrSome = [1,2,3,4,5];
// let result2 = arrSome.some(val => val>=5);

//filter 주어진 함수르 ㄹ통과하는 모든요소를 모아서 새로운 배열로반환
const arr = [1,2,3,4,5,6,7,8,9,10]
let result = arr.filter(function(val){
    return val 
})


let arr = [];
    
    let result1 = arr.filter( function(val){
            arr=[];
        for(let i=2; i<= num; i++){
            let sosu1 = true;
            for(let j=2; j<i; j++){
                if(i%j === 0 ){
                    sosu1 = false;
                }
            }
            if(sosu1 == true){
                return val;
            }
        }
        
    });