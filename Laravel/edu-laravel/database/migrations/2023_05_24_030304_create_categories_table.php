<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    // migration 파일 생성 : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate 
    // migration 리셋( 모든 migration 파일의 down()메소드를 실행) : php artisan migrate:reset
    // migration 롤백(가장 마지막에 실행한 migration 의 내용을 롤백) : php artisan migrate:rollback

    //시더 (초기데이터 생성 ) : database\seeders의 각 클래스 파일 확인
    // 팩토리 (더미 데이터 생성) : database\factories의 각 클래스 파일 확인

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            // 글번호 , 제목 , 내용 , 작성일 , 수정일, 삭제일자 , 삭제여부
            $table->id('id'); // big_int, pk , auto_increment 
            $table->char('no',1)->unique(); //char(1), not null index추가
            $table->string('name', 30 )->unique();// varchar(100) not null 
            $table->char('active_flg', 1 )->default('1');// char(1), default '0', not null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
