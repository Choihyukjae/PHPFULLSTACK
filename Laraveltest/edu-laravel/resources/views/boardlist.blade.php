

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>게시판</title>
    <style>
        body {
            background-image : url('kkkkk.png') ;
            background-repeat : no-repeat;
            background-repeat : cover;
        }
        a{  
            color : black;
            font-size : 20px;
        }
    </style>
</head>
<body>
<h1>주식 게시판</h1>


    <script>
if (!sessionStorage.getItem('visited')) 
    {
        var name = prompt('이름을 입력하세요','4글자 이하로 입력해주세요');
        sessionStorage.setItem('visited', true);
    }
    </script>
        <div class="kosdaq">
    <a class="btn btn-outline-primary" href="https://m.stock.naver.com/domestic/index/KOSPI/total" target="_blank" >코스피지수 보기</a>
    <a class="btn btn-outline-primary" href="https://m.stock.naver.com/domestic/index/KOSDAQ/total" target="_blank">코스닥지수 보기</a>
    </div>

    <button class="insert_1" type="button" > <a href="board_insert.php">게시글 작성</a> </button>

    <div class='table table-striped'>
        <div class='div_2'>환영합니다 <script> document.write(name)</script> 님</div>
    <table class='table table-striped'>
        <thead>
            <tr style="background-color : gray;" class = 'tr_1'>
                <th width = 150px;>게시글 번호</th>
                <th width = 600px>게시글 제목</th>
                <th width = 150px>작성일자</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
    <div class='div_1'>
    <a class='btn btn-outline-success'  href='board_list.php?page_num=1'>처음으로</a>

    </div>
    <div class='div_4'>
    <select name="search_scope">
							<option value="everything">전체</option>
							<option value="subject">게시글 제목</option>
							<option value="problem">게시글 번호</option>
							<option value="author">작성일자</option>
	</select>


</body>
</html>