let num = 100 ;

let arr = []

    for (let i = 1; i < num; i++) 
    {
        arr.push(i);
    }

    // let result = arr.filter(function(val){
    //     for
    // })

    // function sosu(){
    //     let result=[];
    //     for(let i=2; i<= num; i++){
    //         let sosu1 = true;
    //         for(let j=2; j<i; j++){
    //             if(i%j === 0 ){
    //                 sosu1 = false;
    //             }
    //         }
    //         if(sosu1 == true){
    //             result.push(i);
    //         }
    //     }
    //     return result;
    // }
    
    // let result1 = arr.filter( function(val){
    //     // for(let i=2; i<= 100; i++){
    //         // val = true;
    //         if(val == 1){
    //             val = false ;
            
    //         for(let j=2; j<val; j++){
    //             if(val%j === 0 ){
    //                 val = false;
    //             }
    //         }
    //         if(val == true){
    //             return val;
    //         }
    //         }
    // });
    let result = arr.filter(function(val){
        let remain = 0; 
        for(let i =1; i<= val; i++){
            if (val%i === 0){
                remain++;
            }
        }
        if(remain === 2 ){
            return true;
        }
        else{
            return false;
        }
    })
alert(result);

//1.  1~입력값의 요소를 가지는 배열을 만들어 주세요.
//2.  그 배열에서 소수만 찾아서 새로운 배열을 만들어 주세요.
//3.  그 배열을 알러트로 출력해주세요