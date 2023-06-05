<?php

// cookie 작성 
setcookie("name","kim mihyeon", time()+ 30);
setcookie("age","26", time()+ 300);

//쿠키삭제법 위에서 세팅한 쿠기값을 빈값으로 넣고 시간 0으로 설정 
setcookie("age","", 0);

$test1 = 'test';
?>