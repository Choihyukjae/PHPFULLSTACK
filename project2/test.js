
// var xhr = new XMLHttpRequest();
// /* 국내 주식 주문 */
// var url = "https://openapi.koreainvestment.com:9443/oauth2/tokenP"
// xhr.setRequestHeader('Content-Type','application/json')
// xhr.setRequestHeader('authorization','Bearer {TOKEN}')
// xhr.setRequestHeader('appKey','{Client_ID}')
// xhr.setRequestHeader('appSecret','{Client_Secret}')
// xhr.setRequestHeader('personalSeckey','{personalSeckey}')
// xhr.setRequestHeader('tr_id','FHKST01010100')
// xhr.setRequestHeader('tr_cont','')
// xhr.setRequestHeader('custtype','법인(B), 개인(P)')
// xhr.setRequestHeader('seq_no','법인(01), 개인( )')
// xhr.setRequestHeader('mac_address','{Mac_address}')
// xhr.setRequestHeader('phone_num','P01011112222')
// xhr.setRequestHeader('ip_addr','{IP_addr}')
// xhr.setRequestHeader('hashkey','{Hash값}')
// xhr.setRequestHeader('gt_uid','{Global UID}')
// xhr.onreadystatechange = function () {
//     if (this.readyState == 4) {
//         console.log('Status : ' + this.status + '\nHeaders:'
//             + JSON.stringify(this.getAllResponseHeaders()) + '\Body :' + this.responseText);
//     }
// };
// xhr.send({
//     "grant_type": "client_credentials",
//     "appkey": "PScLIQGUAkum6wF68XnK0jK0E7PN4OHNxcWb",
//     "appsecret":  "z3Z/GX38jOd6ree4VjlNxmKSm5b7XOrC7GJgG8Qsbdg4tOxwKpAQe+v+h90gNHR503cBWv/3QlXu3cFdGUPLD7mGp+kyqc3vd4fFf78ZZJZquRmax7JRtayhUmvy7CQph1i94KH7gHTlpOCgYuN7kIT04qH11vrUSD4lHxfPp/Nn7o2t2S0="
//     });

// var xhr = new XMLHttpRequest();
// /* 국내 주식 주문 */
// var url = "https://openapi.koreainvestment.com:9443/oauth2/tokenP";
// xhr.open('POST', url);
// xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');

// xhr.onreadystatechange = function () {
//     if (xhr.readyState === 4) {
//         console.log('Status: ' + xhr.status + '\nHeaders: ' +
//             JSON.stringify(xhr.getAllResponseHeaders()) + '\nBody: ' + xhr.responseText);
//     }
// };

// var requestBody = {
//     "grant_type": "client_credentials",
//     "appkey": "PScLIQGUAkum6wF68XnK0jK0E7PN4OHNxcWb",
//     "appsecret": "z3Z/GX38jOd6ree4VjlNxmKSm5b7XOrC7GJgG8Qsbdg4tOxwKpAQe+v+h90gNHR503cBWv/3QlXu3cFdGUPLD7mGp+kyqc3vd4fFf78ZZJZquRmax7JRtayhUmvy7CQph1i94KH7gHTlpOCgYuN7kIT04qH11vrUSD4lHxfPp/Nn7o2t2S0="
// };

// xhr.onload = function () {
//     if (xhr.status === 200) {
//         var response = JSON.parse(xhr.responseText);
//         var accessToken = response.access_token;
//         // API 호출에 필요한 작업을 여기에 추가합니다.
//         console.log('Access Token: ' + accessToken);
//     } else {
//         console.log('Request failed. Status: ' + xhr.status);
//     }
// };

// xhr.send(JSON.stringify(requestBody));

// const url = "https://openapi.koreainvestment.com:9443/oauth2/token";
// const requestBody = {
//   grant_type: "client_credentials",
//   appkey: "PScLIQGUAkum6wF68XnK0jK0E7PN4OHNxcWb",
//   appsecret: "z3Z/GX38jOd6ree4VjlNxmKSm5b7XOrC7GJgG8Qsbdg4tOxwKpAQe+v+h90gNHR503cBWv/3QlXu3cFdGUPLD7mGp+kyqc3vd4fFf78ZZJZquRmax7JRtayhUmvy7CQph1i94KH7gHTlpOCgYuN7kIT04qH11vrUSD4lHxfPp/Nn7o2t2S0="
// };

// fetch(url, {
//   method: "POST",
//   headers: {
//     "Content-Type": "application/json; charset=UTF-8"
//   },
//   body: JSON.stringify(requestBody)
// })
//   .then(response => response.json())
//   .then(data => {
//     console.log("Response:", data);
//     // 여기에서 받은 데이터를 처리합니다.
//   })
//   .catch(error => {
//     console.error("Error:", error);
//   });










// var url = 'http://cors-anywhere.herokuapp.com/https://openapi.koreainvestment.com:9443/uapi/domestic-stock/v1/quotations/inquire-price';
// const url = "https://openapi.koreainvestment.com:9443/oauth2/token";
// const requestBody = {
//   grant_type: "client_credentials",
//   appkey: "PScLIQGUAkum6wF68XnK0jK0E7PN4OHNxcWb",
//   appsecret: "z3Z/GX38jOd6ree4VjlNxmKSm5b7XOrC7GJgG8Qsbdg4tOxwKpAQe+v+h90gNHR503cBWv/3QlXu3cFdGUPLD7mGp+kyqc3vd4fFf78ZZJZquRmax7JRtayhUmvy7CQph1i94KH7gHTlpOCgYuN7kIT04qH11vrUSD4lHxfPp/Nn7o2t2S0="
// };

// fetch(url, {
//   method: "POST",
//   headers: {
//     "Content-Type": "application/json; charset=UTF-8"
//   },
//   body: JSON.stringify(requestBody)
// })
//   .then(response => response.json())
//   .then(data => {
//     console.log("Response:", data);
//   })
//   .catch(error => {
//     console.error("Error:", error);
//   });
// .catch(error => {console.error("Error:", error);});

// var xhr = new XMLHttpRequest();
// /* 국내주식 시세 조회 */
// var url = 'http://cors-anywhere.herokuapp.com/https://openapi.koreainvestment.com:9443/uapi/domestic-stock/v1/quotations/inquire-price';
// xhr.open('post',url);
// xhr.setRequestHeader('Content-Type','application/json; charset=utf-8')
// xhr.setRequestHeader('authorization','Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ0b2tlbiIsImF1ZCI6IjRlYjZjOWE0LTZkYTMtNGZjZi04YmYyLTcwNzQ4YWE4NzY3MSIsImlzcyI6InVub2d3IiwiZXhwIjoxNjg2NTU3OTE4LCJpYXQiOjE2ODY0NzE1MTgsImp0aSI6IlBTY0xJUUdVQWt1bTZ3RjY4WG5LMGpLMEU3UE40T0hOeGNXYiJ9.tbn8j5hvTG328vfnY4Mwwwa_MU17zhQzLx8ZTUwRXziSkGlJGpb3ZWAxQHg7QhMO-RlguV4cEZmagLK7bXFkFw')
// xhr.setRequestHeader('appKey','PScLIQGUAkum6wF68XnK0jK0E7PN4OHNxcWb')
// xhr.setRequestHeader('appSecret','z3Z/GX38jOd6ree4VjlNxmKSm5b7XOrC7GJgG8Qsbdg4tOxwKpAQe+v+h90gNHR503cBWv/3QlXu3cFdGUPLD7mGp+kyqc3vd4fFf78ZZJZquRmax7JRtayhUmvy7CQph1i94KH7gHTlpOCgYuN7kIT04qH11vrUSD4lHxfPp/Nn7o2t2S0=')
// // xhr.setRequestHeader('personalSeckey','{personalSeckey}')
// xhr.setRequestHeader('tr_id','FHKST01010100')
// // xhr.setRequestHeader('tr_cont','')
// // xhr.setRequestHeader('custtype','법인(B), 개인(P)')
// // xhr.setRequestHeader('seq_no','법인(01), 개인( )')
// // xhr.setRequestHeader('mac_address','{Mac_address}')
// // xhr.setRequestHeader('phone_num','P01011112222')
// // xhr.setRequestHeader('ip_addr','{IP_addr}')
// // xhr.setRequestHeader('hashkey','{Hash값}')
// // xhr.setRequestHeader('gt_uid','{Global UID}')
// xhr.onreadystatechange = function () {
//     if (this.readyState == 4) {
//         console.log('Status : ' + this.status + '\nHeaders:'
//             + JSON.stringify(this.getAllResponseHeaders()) + '\Body :' + this.responseText);
//     }
// };
// xhr.send('{\n' +
//     '    "FID_COND_MRKT_DIV_CODE": "J",\n' +
//     '    "FID_INPUT_ISCD": "005930"\n' +
//     '}');


// fetch 형식  
var url = 'http://cors-anywhere.herokuapp.com/https://openapi.koreainvestment.com:9443/uapi/domestic-stock/v1/quotations/inquire-price';

fetch(url, {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json; charset=utf-8',
    'authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ0b2tlbiIsImF1ZCI6IjRlYjZjOWE0LTZkYTMtNGZjZi04YmYyLTcwNzQ4YWE4NzY3MSIsImlzcyI6InVub2d3IiwiZXhwIjoxNjg2NTU3OTE4LCJpYXQiOjE2ODY0NzE1MTgsImp0aSI6IlBTY0xJUUdVQWt1bTZ3RjY4WG5LMGpLMEU3UE40T0hOeGNXYiJ9.tbn8j5hvTG328vfnY4Mwwwa_MU17zhQzLx8ZTUwRXziSkGlJGpb3ZWAxQHg7QhMO-RlguV4cEZmagLK7bXFkFw',
    'appKey': 'PScLIQGUAkum6wF68XnK0jK0E7PN4OHNxcWb',
    'appSecret': 'z3Z/GX38jOd6ree4VjlNxmKSm5b7XOrC7GJgG8Qsbdg4tOxwKpAQe+v+h90gNHR503cBWv/3QlXu3cFdGUPLD7mGp+kyqc3vd4fFf78ZZJZquRmax7JRtayhUmvy7CQph1i94KH7gHTlpOCgYuN7kIT04qH11vrUSD4lHxfPp/Nn7o2t2S0=',
    'tr_id': 'FHKST01010100'
  },
  body: JSON.stringify({
    "FID_COND_MRKT_DIV_CODE": "J",
    "FID_INPUT_ISCD": "005930"
  })
})
.then(function(response) {
  console.log('Status : ' + response.status + '\nHeaders: ' + JSON.stringify(response.headers));
  return response.json(); // 응답 본문을 JSON으로 변환하여 반환
})
.then(function(body) {
  console.log('Body : ' + JSON.stringify(body));
})
.catch(function(error) {
  console.log('Error:', error);
});