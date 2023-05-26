<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //-------------------
        //쿼리 빌더
        //-------------------
        //select
        // $result = DB::select('select * from categories');
        // $no = 5;
        // $result = DB::select('select * from categories where no = :no',['no' => $no]);

        $input = ['4' , '7' , '8']; // categories 의 no 컬럼
        // 게시글 번호 게시글 제목 카테고리 명 을 출력해주세요 (게시글 번호로 오름차순 정렬후 상위 5개만)
        // $result = DB::select('select b.bno, b.btitle, c.name 
        //                     from categories c, boards b 
        //                     where c.no = b.category
        //                     and c.no in(? ,? ,?) 
        //                     order by b.bno 
        //                     limit 5', $input );



        // insert

    //     $result = DB::insert('insert into boards (category, btitle, bcontent, created_at, updated_at) 
    //     values (:category, :btitle, :bcontent, :created_at, :updated_at)'
    //     , [
    //         'category' => '1',
    //         'btitle' => 'hi123',
    //         'bcontent' => 'bye123',
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]
    // );

    // 방금 등록한 게시글의 제목 : test 내용 : testtest 로 변경해주세요
        // update 

//         $result = DB::update('update boards set btitle = :btitle, bcontent = :bcontent where bno = :bno',
//         ['btitle' => 'test1',
//         'bcontent' => 'test1',
//         'bno' => 60002]
// );
        // delete
        // $result = DB::delete('delete from boards where bno = :bno', ['bno' => 60001]);

        // $result = DB::delete('delete from boards where bno in(? , ?)', [59999,60000]);
        
        //------------------
        //쿼리 빌더 체이닝
        //------------------
        $no1 = '5';
        $no2 = '8';

        // select * from categories where no = :no 
        // $result = DB::table('categories')->where('no','=',$no)->get();

        // select * from categories where no = ? or no = ?
        // $result = DB::table('categories')->where('no',$no1)->orWhere('no',$no2)->dd();

        // select * from categories where no in(?,?)
        // $result = DB::table('categories')->whereIn('no',[$no1,$no2])->dd();

        // select * from categories where no Not in(?,?)
        // $result = DB::table('categories')->whereNotIn('no',[$no1,$no2])->get();

        // select id, no , name from categories
        // $result = DB::table('catetories')->select('id','no','name')->dd();

        // select id, no , name from categories order by name desc 
        // $result = DB::table('catetories')->select('id','no','name')->orderBy('name','desc')->dd();

        //*****주의해서 사용(사용 안하는 걸 추천)  */ whereRaw()
        // $result = DB::table('categories')->whereRaw('no = '.$no1);

        // first() : limit 1과 비슷한 작동
        // $result = DB::table('boards')->orderBy('bno','desc')->first();

        // firstOrFail() : first() 같은 동작을 하는데, 실패시 결과가 예외 발생 (엘로퀀트 모델 객체에서만 사용가능)
        // $result = DB::table('boards')->orderBy('bno','desc')->firstOrFail();

        //집계 메소드
        // $result = DB::table('boards')->count(); // 결과의 레코드수를 반환
        // $result = DB::table('boards')->max('bno'); // 결과의 max값 반환

        //트랜잭션
        // DB::beginTransaction();//트랜잭션 시작

        // DB::rollback();// 롤백
        // DB::commit();// 커밋

        // 카테고리가 활설화 되어 있는 게시글의 카테고리 별 갯수를 출력해주세요 
        // 카테고리 번호, 카테고리명 , 갯수
    //     $result = DB::table('categories')
    //     ->select(DB::raw('categories.no , categories.name , COUNT(bno)'))
    //     ->join('boards','categories.no' ,'=', 'boards.category')
    //     ->where('active_flg','=','1')
    //     ->groupBy('categories.name','categories.no')->get();
    //     return var_dump($result);
    // }   
        $result = DB::table('categories')
        ->select(DB::raw('categories.no , categories.name , COUNT(bno)'))
        ->join('boards','categories.no' ,'=', 'boards.category')
        ->where('active_flg','=','1')
        ->groupBy('categories.name','categories.no')->get();
        return var_dump($result);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request  
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
